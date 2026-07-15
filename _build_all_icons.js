const sharp = require('sharp');
const fs = require('fs');

// Source of truth: the finished gold S-enso artwork (1024x1024, gold mark +
// glow on a TRANSPARENT background). The whole icon background is filled with
// the homepage dark-section "shiny green" gradient, and the gold mark sits on
// top — so the enso's transparent interior shows that same green through it.
const SRC = 'assets/icons/new-icon.png';
const PAD = 0.86;   // app-icon content scale (leaves a little edge padding)

// The mark occupies a ~586x622 box centered in the 1024 canvas with lots of
// transparent padding + glow. Square-crop tight to it so it fills the frame.
const CROP = {left:202, top:180, width:624, height:624};

// Homepage dark-section green (css/home.css): shiny top-lit forest-green.
const GRAD = '<linearGradient id="g" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#3c4d33"/><stop offset="0.55" stop-color="#2c3724"/><stop offset="1" stop-color="#202a19"/></linearGradient>';
const bgBuf = (size, rx=0)=> Buffer.from(`<svg xmlns="http://www.w3.org/2000/svg" width="${size}" height="${size}"><defs>${GRAD}</defs><rect width="${size}" height="${size}" rx="${rx}" fill="url(#g)"/></svg>`);

(async()=>{
  const goldCrop = await sharp(SRC).extract(CROP).png().toBuffer();
  // green gradient background + gold mark (scaled by `scale`) centered on top
  const compose = async (size, scale, rx=0)=>{
    const inner = Math.max(1, Math.round(size*scale));
    const mark = await sharp(goldCrop).resize(inner,inner,{fit:'fill'}).png().toBuffer();
    return sharp(bgBuf(size,rx)).composite([{input:mark,gravity:'center'}]).png().toBuffer();
  };
  const mkFull = (size)=> compose(size, 1.0);              // web: mark fills the frame on green (square)
  const mkPad  = (size)=> compose(size, PAD);             // app icons: a little padding on green
  const mkFav  = (size)=> compose(size, 1.0, Math.round(size*0.2)); // favicons: green tile w/ soft rounded corners
  const mkMark = (size)=> sharp(goldCrop).resize(size,size,{fit:'fill'}).png().toBuffer(); // transparent mark (adaptive fg)

  const jobs = [
    // WEB — green bg, mark full-bleed
    ['assets/icons/web/icon-512.png', 512, mkFull],
    ['assets/icons/web/icon-192.png', 192, mkFull],
    // transparent gold mark (no bg) for flexible reuse
    ['assets/icons/web/mark-transparent.png', 512, mkMark],
    // WEB maskable — green bg + safe-zone padding
    ['assets/icons/web/icon-512-maskable.png', 512, mkPad],
    // iOS  (square, opaque) — green bg + padding
    ['assets/icons/ios/AppIcon-1024.png', 1024, mkPad],
    // ANDROID play store — green bg + padding
    ['assets/icons/android/play-store-512.png', 512, mkPad],
    // ANDROID adaptive foreground: transparent mark (over the green bg layer)
    ['assets/icons/android/adaptive/ic_launcher_foreground.png', 512, mkMark],
    // ANDROID legacy mipmaps — green bg + padding
    ['assets/icons/android/mipmap/ic_launcher-48-mdpi.png',    48,  mkPad],
    ['assets/icons/android/mipmap/ic_launcher-72-hdpi.png',    72,  mkPad],
    ['assets/icons/android/mipmap/ic_launcher-96-xhdpi.png',   96,  mkPad],
    ['assets/icons/android/mipmap/ic_launcher-144-xxhdpi.png', 144, mkPad],
    ['assets/icons/android/mipmap/ic_launcher-192-xxxhdpi.png',192, mkPad],
  ];
  for(const [path,size,fn] of jobs){ fs.writeFileSync(path, await fn(size)); console.log('wrote', path); }
  // Adaptive background: the green gradient (mark lives in the foreground layer).
  fs.writeFileSync('assets/icons/android/adaptive/ic_launcher_background.png', await sharp(bgBuf(512)).png().toBuffer());
  console.log('wrote adaptive background (green gradient)');

  // ---- FAVICON set ----
  const favB64 = (await mkFav(512)).toString('base64');
  const svgFav = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="512" height="512"><image href="data:image/png;base64,${favB64}" width="512" height="512"/></svg>`;
  fs.writeFileSync('assets/icons/web/favicon.svg', svgFav);

  const p16=await mkFav(16), p32=await mkFav(32), p48=await mkFav(48);
  fs.writeFileSync('assets/icons/web/favicon-16.png', p16);
  fs.writeFileSync('assets/icons/web/favicon-32.png', p32);
  fs.writeFileSync('assets/icons/web/favicon-48.png', p48);
  fs.writeFileSync('assets/icons/web/apple-touch-icon.png', await mkPad(180));
  const ico = (pngs)=>{
    const n=pngs.length, header=Buffer.alloc(6);
    header.writeUInt16LE(0,0); header.writeUInt16LE(1,2); header.writeUInt16LE(n,4);
    let offset=6+n*16; const dir=[], imgs=[];
    for(const p of pngs){ const e=Buffer.alloc(16);
      e.writeUInt8(p.size>=256?0:p.size,0); e.writeUInt8(p.size>=256?0:p.size,1);
      e.writeUInt16LE(1,4); e.writeUInt16LE(32,6);
      e.writeUInt32LE(p.buf.length,8); e.writeUInt32LE(offset,12);
      offset+=p.buf.length; dir.push(e); imgs.push(p.buf); }
    return Buffer.concat([header,...dir,...imgs]);
  };
  const icoBuf = ico([{size:16,buf:p16},{size:32,buf:p32},{size:48,buf:p48}]);
  fs.writeFileSync('assets/icons/web/favicon.ico', icoBuf);
  fs.writeFileSync('favicon.ico', icoBuf);
  console.log('wrote favicon set + root favicon.ico');
  console.log('DONE');
})().catch(e=>console.log('ERR',e.message));
