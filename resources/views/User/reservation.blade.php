<!DOCTYPE html>
<html lang="en" class="[scroll-behavior:smooth]">

<he>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Reservation</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">
    </head>

    <body class="text-white [background-color:#1c382b] [color:#294c44] [font-family:'Montserrat',_sans-serif] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0] [overflow-x:hidden] [padding-bottom:0] [padding-left:0] [padding-right:0] [padding-top:0]">

        @include('components.navbar')

        <section class='[background-image:url("https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=2000&q=85")] [background-position:center] [background-size:cover] [min-height:430px] [position:relative] max-[900px]:[min-height:430px]'>
            <div class="[background-color:rgba(0,_0,_0,_.35)] [inset:0] [position:absolute]"></div>

            <div class="[color:white] [left:5%] [position:absolute] [top:160px] [z-index:2] max-[600px]:[left:7%]">
                <h1 class='[font-family:"Playfair_Display",_serif] [font-size:80px] [font-weight:500] [letter-spacing:6px] [line-height:1.1] [margin-bottom:5px] [margin-left:0] [margin-right:0] [margin-top:5px] max-[600px]:[font-size:40px] max-[900px]:[font-size:50px]'>RESERVATION</h1>
                <p>
                    Reserve your stay and experience comfort <br> surrounded by nature.
                </p>
            </div>
        </section>

        <section class="[background-color:#f4f2ec] [color:#333333] [font-family:'Montserrat',_sans-serif] [padding-bottom:3rem] [padding-left:1rem] [padding-right:1rem] [padding-top:3rem]">
    <div class="[margin-bottom:0] [margin-left:auto] [margin-right:auto] [margin-top:0] [max-width:56rem]">
        <div class="text-center mb-8">
            <h1 class="[color:#223830] [font-family:'Playfair_Display',_serif] [font-size:1.875rem] [font-weight:600] [letter-spacing:0.05em] [margin-bottom:0.5rem] [text-align:center] [text-transform:uppercase]">MET YOUR SANCTUARY</h1>
            <p class="[color:#4b5563] [font-size:0.875rem] [font-style:italic] [margin-bottom:2rem] [text-align:center]">
                "Each room is designed to immerse you in nature<br>while offering the comfort of refines luxury"
            </p>
        </div>

        <div class="[background-color:#ffffff] [box-shadow:0_1px_3px_rgba(0,_0,_0,_0.05)] [margin-bottom:1.5rem] [padding-bottom:2rem] [padding-left:2rem] [padding-right:2rem] [padding-top:2rem]">
            <div class="[display:grid] [gap:1.5rem] [grid-template-columns:1fr] [margin-bottom:2rem] min-[768px]:[grid-template-columns:1fr_1fr]">
                <div class="[height:16rem] [overflow:hidden] [width:100%]">
                    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=800&q=80" alt="Mistwood Suite" class="[height:100%] [object-fit:cover] [width:100%]">
                </div>

                <div>
                    <h2 class="[color:#b58950] [font-family:'Playfair_Display',_serif] [font-size:1.5rem] [font-weight:500] [letter-spacing:0.05em] [margin-bottom:0.5rem] [text-transform:uppercase]">MISTWOOD SUITE</h2>
                    <p class="[color:#4b5563] [font-size:0.75rem] [line-height:1.5] [margin-bottom:1.5rem]">
                        A cozy retreat surrounded by lush and greenery,<br>with a private balcony and peaceful forest views.
                    </p>

                    <div>
                        <div class="[align-items:center] [color:#374151] [display:flex] [font-size:0.75rem] [gap:0.75rem] [margin-bottom:0.75rem]">
                            <svg class="[color:#b58950] [height:1rem] [width:1rem]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                            <span>45m²</span>
                        </div>
                        <div class="[align-items:center] [color:#374151] [display:flex] [font-size:0.75rem] [gap:0.75rem] [margin-bottom:0.75rem]">
                            <svg class="[color:#b58950] [height:1rem] [width:1rem]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            <span>King Bed</span>
                        </div>
                        <div class="[align-items:center] [color:#374151] [display:flex] [font-size:0.75rem] [gap:0.75rem] [margin-bottom:0.75rem]">
                            <svg class="[color:#b58950] [height:1rem] [width:1rem]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            <span>2 People</span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="[border-top-color:#f3f4f6] [border-top-style:solid] [border-top-width:1px] [color:#b58950] [font-size:1.125rem] [font-weight:500] [margin-bottom:0.75rem] [padding-top:1.5rem]">Descriptions</h3>
                <div class="[color:#4b5563] [font-size:0.75rem] [line-height:1.625] [text-align:justify]">
                    <p class="[margin-bottom:1rem]">
                        A warm and intimate bedroom surrounded by lush greenery, where floor-to-ceiling glass windows bring the peaceful forest directly into the room. The soft neutral bedding, natural wood accents, woven textures, and warm ambient lighting create a cozy atmosphere, while the private balcony offers a quiet place to enjoy the beauty of the surrounding nature.
                    </p>
                    <p class="[margin-bottom:1rem]">
                        Surrounded by the calming beauty of the forest, this thoughtfully designed suite offers a peaceful escape from the everyday. Natural materials, earthy tones, and carefully placed furnishings create a sense of warmth and harmony, while the expansive windows fill the space with soft daylight and invite guests to slow down, relax, and reconnect with nature.
                    </p>
                </div>
            </div>
        </div>

        <div class="[background-color:#ffffff] [box-shadow:0_1px_3px_rgba(0,_0,_0,_0.05)]">
            <form class="[background-color:#223830] [color:#ffffff] [padding-bottom:1.5rem] [padding-left:1.5rem] [padding-right:1.5rem] [padding-top:1.5rem]">
                <div class="[display:grid] [gap:1rem] [grid-template-columns:1fr] [margin-bottom:1rem] min-[768px]:[grid-template-columns:1fr_1fr]">
                    <div>
                        <label class="[display:block] [font-size:0.75rem] [font-weight:600] [letter-spacing:0.025em] [margin-bottom:0.25rem]">Name:</label>
                        <input type="text" class="[background-color:#ffffff] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:medium] [border-left-color:currentColor] [border-left-style:none] [border-left-width:medium] [border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [border-top-color:currentColor] [border-top-style:none] [border-top-width:medium] [color:#1f2937] [font-size:0.75rem] [outline:none] [padding-bottom:0.5rem] [padding-left:0.75rem] [padding-right:0.75rem] [padding-top:0.5rem] [width:100%]">
                    </div>
                    <div>
                        <label class="[display:block] [font-size:0.75rem] [font-weight:600] [letter-spacing:0.025em] [margin-bottom:0.25rem]">E-mail/Phone Number:</label>
                        <input type="text" class="[background-color:#ffffff] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:medium] [border-left-color:currentColor] [border-left-style:none] [border-left-width:medium] [border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [border-top-color:currentColor] [border-top-style:none] [border-top-width:medium] [color:#1f2937] [font-size:0.75rem] [outline:none] [padding-bottom:0.5rem] [padding-left:0.75rem] [padding-right:0.75rem] [padding-top:0.5rem] [width:100%]">
                    </div>
                </div>

                <div class="[margin-bottom:1rem] [position:relative]">
                    <label class="[display:block] [font-size:15px] [font-weight:600] [letter-spacing:0.025em] [line-height:1.45] [margin-bottom:9px] [margin-left:2px]">Date:</label>
                    <input type="text" class="[background-color:#ffffff] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:medium] [border-left-color:currentColor] [border-left-style:none] [border-left-width:medium] [border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [border-top-color:currentColor] [border-top-style:none] [border-top-width:medium] [color:#1f2937] [font-size:0.75rem] [outline:none] [padding-bottom:0.5rem] [padding-left:0.75rem] [padding-right:0.75rem] [padding-top:0.5rem] [width:100%]">
                </div>

                <div class="[margin-bottom:1rem] [position:relative]">
                    <label class="[display:block] [font-size:15px] [font-weight:600] [letter-spacing:0.025em] [line-height:1.45] [margin-bottom:9px] [margin-left:2px]">Note:</label>
                    <input type="text" class="[background-color:#ffffff] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:medium] [border-left-color:currentColor] [border-left-style:none] [border-left-width:medium] [border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [border-top-color:currentColor] [border-top-style:none] [border-top-width:medium] [color:#1f2937] [font-size:0.75rem] [outline:none] [padding-bottom:0.5rem] [padding-left:0.75rem] [padding-right:0.75rem] [padding-top:0.5rem] [width:100%]">
                </div>
            </form>

            <div class="[align-items:center] [background-color:#ffffff] [display:flex] [justify-content:space-between] [padding-bottom:1rem] [padding-left:1.5rem] [padding-right:1.5rem] [padding-top:1rem]">
                <div>
                    <span class="[color:#b58950] [font-size:1.25rem] [font-weight:700]">$280</span>
                    <span class="[color:#6b7280] [font-size:0.75rem]">/night</span>
                </div>
                <button type="submit" class="[background-color:#223830] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:medium] [border-left-color:currentColor] [border-left-style:none] [border-left-width:medium] [border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [border-top-color:currentColor] [border-top-style:none] [border-top-width:medium] [color:#ffffff] [cursor:pointer] [font-size:0.75rem] [font-weight:600] [letter-spacing:0.05em] [padding-bottom:0.625rem] [padding-left:1.5rem] [padding-right:1.5rem] [padding-top:0.625rem] [text-transform:uppercase] [transition:background-color_0.2s_ease] hover:[background-color:#1a2c26]">BOOK NOW</button>
            </div>
        </div>
    </div>
</section>
        @include('components.footer')

    </body>

</html>