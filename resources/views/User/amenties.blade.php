<!DOCTYPE html>
<html lang="en" class="[scroll-behavior:smooth]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Amenities</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="[background-color:#f5f3ed] [color:#294c44] [font-family:'Montserrat',_sans-serif]">

    @include('components.navbar')

    <section class='[background-image:url("https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&w=2000&q=85")] [background-position:center] [background-size:cover] [min-height:430px] [position:relative] max-[900px]:[min-height:430px]'>
        <div class="[background-color:rgba(0,_0,_0,_.35)] [inset:0] [position:absolute]"></div>

        <div class="[color:white] [left:5%] [max-width:430px] [position:absolute] [top:155px] [z-index:2] max-[600px]:[left:7%]">
            <h1 class='[font-family:"Playfair_Display",_serif] [font-size:clamp(42px,_5vw,_68px)] [font-weight:500] [letter-spacing:4px] [line-height:1.1] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0] max-[600px]:[font-size:40px] max-[900px]:[font-size:50px]'>AMENITIES</h1>
            <p class="[font-size:15px] [line-height:1.45] [margin-top:12px] [max-width:390px]">
                Reconnect with nature, indulge in comfort, and create memories that last a lifetime.
            </p>
        </div>
    </section>

    <section class="[background-color:#254d47] [color:#ffffff] [padding-bottom:80px] [padding-left:8%] [padding-right:8%] [padding-top:32px]">
        <div class="[margin-bottom:50px] [text-align:center]">
            <h2 class="[font-family:'Montserrat',_sans-serif] [font-size:27px] [font-weight:500] [letter-spacing:2px] [margin-bottom:12px]">AMENITIES</h2>
            <p class="[font-size:13px] [font-weight:300] [letter-spacing:0.5px] [opacity:0.9]">Reconnect with nature, indulge in comfort, and create memories that last a lifetime.</p>
        </div>

        <div class="[display:grid] [gap:25px] [grid-template-columns:repeat(3,_1fr)] max-[1024px]:[grid-template-columns:repeat(2,_1fr)] max-[600px]:[grid-template-columns:1fr] max-[900px]:[gap:30px] max-[900px]:[grid-template-columns:repeat(2,_1fr)]">
            <article class="[background-color:#ffffff] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-top-left-radius:2px] [border-top-right-radius:2px] [box-shadow:0_4px_15px_rgba(0,_0,_0,_0.05)] [color:#254d47] [display:flex] [flex-direction:column] [overflow:hidden] [padding-top:2.5rem] [position:relative]">
                <div class="[height:190px] [overflow:hidden] [width:100%]">
                    <img class="[display:block] [height:100%] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=800&q=80" alt="Lune Café">
                </div>
                <div class="[display:flex] [flex-direction:column] [flex-grow:1] [padding-bottom:20px] [padding-left:20px] [padding-right:20px] [padding-top:20px] [width:100%] min-[768px]:[padding-bottom:3rem] min-[768px]:[padding-left:2.5rem] min-[768px]:[width:58%]">
                    <h3 class="[color:#1b3834] [font-family:'Playfair_Display',_serif] [font-size:18px] [font-weight:500] [margin-bottom:10px]">Lune Café</h3>
                    <p class="[color:#555555] [flex-grow:1] [font-size:11px] [line-height:1.6] [margin-bottom:20px]">A cozy retreat surrounded by nature, perfect for slow mornings, freshly brewed coffee, and light bites.</p>
                    <a href="{{ url('/amenities/lune-cafe') }}" class="[align-items:center] [border-top-color:#f0f0f0] [border-top-style:solid] [border-top-width:1px] [color:#b4874b] [display:flex] [font-size:10px] [font-weight:600] [justify-content:space-between] [letter-spacing:1px] [padding-top:12px] [text-decoration:none]">
                        <span>LEARN MORE</span>
                        <span class="[font-size:16px] [line-height:1]">&rsaquo;</span>
                    </a>
                </div>
            </article>

            <article class="[background-color:#ffffff] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-top-left-radius:2px] [border-top-right-radius:2px] [box-shadow:0_4px_15px_rgba(0,_0,_0,_0.05)] [color:#254d47] [display:flex] [flex-direction:column] [overflow:hidden] [padding-top:2.5rem] [position:relative]">
                <div class="[height:190px] [overflow:hidden] [width:100%]">
                    <img class="[display:block] [height:100%] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=800&q=80" alt="Lunelle Spa">
                </div>
                <div class="[display:flex] [flex-direction:column] [flex-grow:1] [padding-bottom:20px] [padding-left:20px] [padding-right:20px] [padding-top:20px] [width:100%] min-[768px]:[padding-bottom:3rem] min-[768px]:[padding-left:2.5rem] min-[768px]:[width:58%]">
                    <h3 class="[color:#1b3834] [font-family:'Playfair_Display',_serif] [font-size:18px] [font-weight:500] [margin-bottom:10px]">Lunelle Spa</h3>
                    <p class="[color:#555555] [flex-grow:1] [font-size:11px] [line-height:1.6] [margin-bottom:20px]">A tranquil sanctuary offering restorative treatments designed to help you relax, recharge, and reconnect with yourself.</p>
                    <a href="{{ url('/amenities/lunelle-spa') }}" class="[align-items:center] [border-top-color:#f0f0f0] [border-top-style:solid] [border-top-width:1px] [color:#b4874b] [display:flex] [font-size:10px] [font-weight:600] [justify-content:space-between] [letter-spacing:1px] [padding-top:12px] [text-decoration:none]">
                        <span>LEARN MORE</span>
                        <span class="[font-size:16px] [line-height:1]">&rsaquo;</span>
                    </a>
                </div>
            </article>

            <article class="[background-color:#ffffff] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-top-left-radius:2px] [border-top-right-radius:2px] [box-shadow:0_4px_15px_rgba(0,_0,_0,_0.05)] [color:#254d47] [display:flex] [flex-direction:column] [overflow:hidden] [padding-top:2.5rem] [position:relative]">
                <div class="[height:190px] [overflow:hidden] [width:100%]">
                    <img class="[display:block] [height:100%] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?auto=format&fit=crop&w=800&q=80" alt="Serene Pool">
                </div>
                <div class="[display:flex] [flex-direction:column] [flex-grow:1] [padding-bottom:20px] [padding-left:20px] [padding-right:20px] [padding-top:20px] [width:100%] min-[768px]:[padding-bottom:3rem] min-[768px]:[padding-left:2.5rem] min-[768px]:[width:58%]">
                    <h3 class="[color:#1b3834] [font-family:'Playfair_Display',_serif] [font-size:18px] [font-weight:500] [margin-bottom:10px]">Serene Pool</h3>
                    <p class="[color:#555555] [flex-grow:1] [font-size:11px] [line-height:1.6] [margin-bottom:20px]">An infinity pool overlooking breathtaking scenery, creating the perfect setting for peaceful swims and golden-hour moments.</p>
                    <a href="{{ url('/amenities/serene-pool') }}" class="[align-items:center] [border-top-color:#f0f0f0] [border-top-style:solid] [border-top-width:1px] [color:#b4874b] [display:flex] [font-size:10px] [font-weight:600] [justify-content:space-between] [letter-spacing:1px] [padding-top:12px] [text-decoration:none]">
                        <span>LEARN MORE</span>
                        <span class="[font-size:16px] [line-height:1]">&rsaquo;</span>
                    </a>
                </div>
            </article>

            <article class="[background-color:#ffffff] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-top-left-radius:2px] [border-top-right-radius:2px] [box-shadow:0_4px_15px_rgba(0,_0,_0,_0.05)] [color:#254d47] [display:flex] [flex-direction:column] [overflow:hidden] [padding-top:2.5rem] [position:relative]">
                <div class="[height:190px] [overflow:hidden] [width:100%]">
                    <img class="[display:block] [height:100%] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="Solara Lounge">
                </div>
                <div class="[display:flex] [flex-direction:column] [flex-grow:1] [padding-bottom:20px] [padding-left:20px] [padding-right:20px] [padding-top:20px] [width:100%] min-[768px]:[padding-bottom:3rem] min-[768px]:[padding-left:2.5rem] min-[768px]:[width:58%]">
                    <h3 class="[color:#1b3834] [font-family:'Playfair_Display',_serif] [font-size:18px] [font-weight:500] [margin-bottom:10px]">Solara Lounge</h3>
                    <p class="[color:#555555] [flex-grow:1] [font-size:11px] [line-height:1.6] [margin-bottom:20px]">A peaceful forest hideaway where guests can unwind, enjoy quiet conversations, and take in the surrounding greenery.</p>
                    <a href="{{ url('/amenities/solara-lounge') }}" class="[align-items:center] [border-top-color:#f0f0f0] [border-top-style:solid] [border-top-width:1px] [color:#b4874b] [display:flex] [font-size:10px] [font-weight:600] [justify-content:space-between] [letter-spacing:1px] [padding-top:12px] [text-decoration:none]">
                        <span>LEARN MORE</span>
                        <span class="[font-size:16px] [line-height:1]">&rsaquo;</span>
                    </a>
                </div>
            </article>

            <article class="[background-color:#ffffff] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-top-left-radius:2px] [border-top-right-radius:2px] [box-shadow:0_4px_15px_rgba(0,_0,_0,_0.05)] [color:#254d47] [display:flex] [flex-direction:column] [overflow:hidden] [padding-top:2.5rem] [position:relative]">
                <div class="[height:190px] [overflow:hidden] [width:100%]">
                    <img class="[display:block] [height:100%] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1550966871-3ed3cdb5ed0c?auto=format&fit=crop&w=800&q=80" alt="Serein Dining">
                </div>
                <div class="[display:flex] [flex-direction:column] [flex-grow:1] [padding-bottom:20px] [padding-left:20px] [padding-right:20px] [padding-top:20px] [width:100%] min-[768px]:[padding-bottom:3rem] min-[768px]:[padding-left:2.5rem] min-[768px]:[width:58%]">
                    <h3 class="[color:#1b3834] [font-family:'Playfair_Display',_serif] [font-size:18px] [font-weight:500] [margin-bottom:10px]">Serein Dining</h3>
                    <p class="[color:#555555] [flex-grow:1] [font-size:11px] [line-height:1.6] [margin-bottom:20px]">An elegant dining destination serving thoughtfully crafted dishes in a warm and serene atmosphere inspired by the beauty of Avelune.</p>
                    <a href="{{ url('/amenities/serein-dining') }}" class="[align-items:center] [border-top-color:#f0f0f0] [border-top-style:solid] [border-top-width:1px] [color:#b4874b] [display:flex] [font-size:10px] [font-weight:600] [justify-content:space-between] [letter-spacing:1px] [padding-top:12px] [text-decoration:none]">
                        <span>LEARN MORE</span>
                        <span class="[font-size:16px] [line-height:1]">&rsaquo;</span>
                    </a>
                </div>
            </article>

            <article class="[background-color:#ffffff] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-top-left-radius:2px] [border-top-right-radius:2px] [box-shadow:0_4px_15px_rgba(0,_0,_0,_0.05)] [color:#254d47] [display:flex] [flex-direction:column] [overflow:hidden] [padding-top:2.5rem] [position:relative]">
                <div class="[height:190px] [overflow:hidden] [width:100%]">
                    <img class="[display:block] [height:100%] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=800&q=80" alt="Avelune Fitness">
                </div>
                <div class="[display:flex] [flex-direction:column] [flex-grow:1] [padding-bottom:20px] [padding-left:20px] [padding-right:20px] [padding-top:20px] [width:100%] min-[768px]:[padding-bottom:3rem] min-[768px]:[padding-left:2.5rem] min-[768px]:[width:58%]">
                    <h3 class="[color:#1b3834] [font-family:'Playfair_Display',_serif] [font-size:18px] [font-weight:500] [margin-bottom:10px]">Avelune Fitness</h3>
                    <p class="[color:#555555] [flex-grow:1] [font-size:11px] [line-height:1.6] [margin-bottom:20px]">A contemporary wellness space equipped for energizing workouts, mindful movement, and maintaining your daily routine.</p>
                    <a href="{{ url('/amenities/avelune-fitness') }}" class="[align-items:center] [border-top-color:#f0f0f0] [border-top-style:solid] [border-top-width:1px] [color:#b4874b] [display:flex] [font-size:10px] [font-weight:600] [justify-content:space-between] [letter-spacing:1px] [padding-top:12px] [text-decoration:none]">
                        <span>LEARN MORE</span>
                        <span class="[font-size:16px] [line-height:1]">&rsaquo;</span>
                    </a>
                </div>
            </article>
        </div>
    </section>

    <section class="[width:100%]">
        <div class="[display:grid] [grid-template-columns:repeat(4,_1fr)] max-[1024px]:[grid-template-columns:repeat(2,_1fr)] max-[600px]:[grid-template-columns:1fr]">
            <div class="[height:320px] [overflow:hidden] [position:relative]">
                <img class="[display:block] [height:100%] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1462275646964-a0e3386b89fa?auto=format&fit=crop&w=800&q=80" alt="Spring">
                <div class="[align-items:flex-end] [background-image:linear-gradient(to_top,_rgba(0,_0,_0,_0.65),_rgba(0,_0,_0,_0.1))] [display:flex] [inset:0] [justify-content:center] [padding-bottom:30px] [position:absolute]">
                    <h2 class="[color:#ffffff] [font-family:'Montserrat',_sans-serif] [font-size:20px] [font-weight:400] [letter-spacing:3px]">SPRING</h2>
                </div>
            </div>

            <div class="[height:320px] [overflow:hidden] [position:relative]">
                <img class="[display:block] [height:100%] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80" alt="Summer">
                <div class="[align-items:flex-end] [background-image:linear-gradient(to_top,_rgba(0,_0,_0,_0.65),_rgba(0,_0,_0,_0.1))] [display:flex] [inset:0] [justify-content:center] [padding-bottom:30px] [position:absolute]">
                    <h2 class="[color:#ffffff] [font-family:'Montserrat',_sans-serif] [font-size:20px] [font-weight:400] [letter-spacing:3px]">SUMMER</h2>
                </div>
            </div>

            <div class="[height:320px] [overflow:hidden] [position:relative]">
                <img class="[display:block] [height:100%] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1507187632231-5beb21a654a2?auto=format&fit=crop&w=800&q=80" alt="Autumn">
                <div class="[align-items:flex-end] [background-image:linear-gradient(to_top,_rgba(0,_0,_0,_0.65),_rgba(0,_0,_0,_0.1))] [display:flex] [inset:0] [justify-content:center] [padding-bottom:30px] [position:absolute]">
                    <h2 class="[color:#ffffff] [font-family:'Montserrat',_sans-serif] [font-size:20px] [font-weight:400] [letter-spacing:3px]">AUTUMN</h2>
                </div>
            </div>

            <div class="[height:320px] [overflow:hidden] [position:relative]">
                <img class="[display:block] [height:100%] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1483664852095-d6cc6870702d?auto=format&fit=crop&w=800&q=80" alt="Winter">
                <div class="[align-items:flex-end] [background-image:linear-gradient(to_top,_rgba(0,_0,_0,_0.65),_rgba(0,_0,_0,_0.1))] [display:flex] [inset:0] [justify-content:center] [padding-bottom:30px] [position:absolute]">
                    <h2 class="[color:#ffffff] [font-family:'Montserrat',_sans-serif] [font-size:20px] [font-weight:400] [letter-spacing:3px]">WINTER</h2>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

</body>

</html>