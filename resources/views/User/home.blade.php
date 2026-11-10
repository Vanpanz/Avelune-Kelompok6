<!DOCTYPE html>
<html lang="en" class="[scroll-behavior:smooth]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Avelune - Where Nature Meets Serenity</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"rel="stylesheet">
</head>

<body class="[background-color:#f5f3ed] [color:#294c44] [font-family:'Montserrat',_sans-serif]">

    @include('components.navbar')

    <section id="home" class='[background-image:url("https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=2000&q=85")] [background-position:center] [background-size:cover] [min-height:430px] [position:relative] max-[900px]:[min-height:430px]'>

        <div class="[background-color:rgba(0,_0,_0,_.35)] [inset:0] [position:absolute]"></div>

        <div class="[color:white] [left:5%] [position:absolute] [top:103px] [z-index:2] max-[600px]:[left:7%]">

            <p class="[font-size:22px] [font-weight:400] [letter-spacing:3px] max-[600px]:[font-size:18px] max-[900px]:[font-size:22px]">
                ESCAPE TO
            </p>

            <h1 class='[font-family:"Playfair_Display",_serif] [font-size:58px] [font-weight:500] [letter-spacing:6px] [line-height:1.1] [margin-bottom:5px] [margin-left:0] [margin-right:0] [margin-top:5px] max-[600px]:[font-size:40px] max-[900px]:[font-size:50px]'>AVELUNE</h1>

            <p class="[font-size:18px] [line-height:1.4] [margin-top:9px]">
                Where Nature<br>
                Meets Serenity.
            </p>

            <a href="#about" class="[background-color:#a7793f] [color:inherit] [display:inline-block] [font-size:14px] [font-weight:500] [letter-spacing:1px] [margin-top:18px] [padding-bottom:11px] [padding-left:24px] [padding-right:24px] [padding-top:11px] [text-decoration:none]">
                DISCOVER MORE
            </a>

        </div>

        <div id="reservation" class="[align-items:center] [background-color:#254d47] [bottom:-10px] [box-shadow:0_5px_12px_rgba(0,_0,_0,_.25)] [color:white] [display:flex] [left:50%] [min-height:70px] [position:absolute] [transform:translateX(-50%)] [width:75%] [z-index:5] max-[600px]:[bottom:auto] max-[600px]:[left:auto] max-[600px]:[margin-bottom:0] max-[600px]:[margin-left:auto] max-[600px]:[margin-right:auto] max-[600px]:[margin-top:-40px] max-[600px]:[position:relative] max-[600px]:[transform:none] max-[900px]:[flex-wrap:wrap] max-[900px]:[width:90%]">

            <div class="[display:flex] [flex-direction:column] [font-size:10px] [padding-bottom:10px] [padding-left:25px] [padding-right:25px] [padding-top:10px] [width:25%] max-[600px]:[border-left-color:currentColor] max-[600px]:[border-left-style:none] max-[600px]:[border-left-width:medium] max-[600px]:[padding-bottom:12px] max-[600px]:[padding-left:20px] max-[600px]:[padding-right:20px] max-[600px]:[padding-top:12px] max-[600px]:[width:100%] max-[900px]:[width:50%]">
                <small>
                    struggling to find an<br>
                    available room?
                </small>

                <strong class="[font-size:10px] [margin-top:2px]">
                    FIND IT HERE!
                </strong>
            </div>

            <div class="[border-left-color:rgba(255,_255,_255,_.35)] [border-left-style:solid] [border-left-width:1px] [display:flex] [flex-direction:column] [justify-content:center] [padding-bottom:0] [padding-left:25px] [padding-right:25px] [padding-top:0] [width:25%] max-[600px]:[border-left-color:currentColor] max-[600px]:[border-left-style:none] max-[600px]:[border-left-width:medium] max-[600px]:[padding-bottom:12px] max-[600px]:[padding-left:20px] max-[600px]:[padding-right:20px] max-[600px]:[padding-top:12px] max-[600px]:[width:100%] max-[900px]:[width:50%]">
                <label class="[display:block] [font-size:9px] [letter-spacing:1px] [margin-bottom:5px]">CHECK-IN</label>
                <div class="[align-items:center] [display:flex] [font-size:12px] [gap:8px] [justify-content:flex-start] [line-height:1] [min-height:20px]">
                    <span>May 24, 2026</span>
                    <img class="[display:block] [flex-basis:17px] [flex-grow:0] [flex-shrink:0] [height:17px] [object-fit:contain] [width:17px]" src="{{ asset('images/akar-icons--calendar.png') }}" alt="Calendar">
                </div>
            </div>

            <div class="[border-left-color:rgba(255,_255,_255,_.35)] [border-left-style:solid] [border-left-width:1px] [display:flex] [flex-direction:column] [justify-content:center] [padding-bottom:0] [padding-left:25px] [padding-right:25px] [padding-top:0] [width:25%] max-[600px]:[border-left-color:currentColor] max-[600px]:[border-left-style:none] max-[600px]:[border-left-width:medium] max-[600px]:[padding-bottom:12px] max-[600px]:[padding-left:20px] max-[600px]:[padding-right:20px] max-[600px]:[padding-top:12px] max-[600px]:[width:100%] max-[900px]:[width:50%]">
                <label class="[display:block] [font-size:9px] [letter-spacing:1px] [margin-bottom:5px]">CHECK-OUT</label>
                <div class="[align-items:center] [display:flex] [font-size:12px] [gap:8px] [justify-content:flex-start] [line-height:1] [min-height:20px]">
                    <span>May 24, 2026</span>
                    <img class="[display:block] [flex-basis:17px] [flex-grow:0] [flex-shrink:0] [height:17px] [object-fit:contain] [width:17px]" src="{{ asset('images/akar-icons--calendar.png') }}" alt="Calendar">
                </div>
            </div>

            <button class="[background-color:#a7793f] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:medium] [border-left-color:currentColor] [border-left-style:none] [border-left-width:medium] [border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [border-top-color:currentColor] [border-top-style:none] [border-top-width:medium] [color:white] [cursor:pointer] [margin-left:auto] [margin-right:20px] [padding-bottom:10px] [padding-left:30px] [padding-right:30px] [padding-top:10px] max-[900px]:[margin-bottom:10px] max-[900px]:[margin-left:auto] max-[900px]:[margin-right:auto] max-[900px]:[margin-top:10px]">
                SEARCH
            </button>

        </div>

    </section>

    <section id="amenities" class="[background-color:#f5f3ed] [padding-bottom:35px] [padding-left:5%] [padding-right:5%] [padding-top:70px] [text-align:center]">

        <div class="[color:#223830] [font-family:'Montserrat',_sans-serif] [font-size:1.5rem] [font-weight:700] [letter-spacing:0.025em] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]">
            <h2 class="[font-size:26px] [font-weight:500] [letter-spacing:1px] [margin-bottom:35px]">THE AVELUNE AMENITIES</h2>
        </div>

        <div class="[display:grid] [grid-template-columns:repeat(5,_1fr)] max-[600px]:[grid-template-columns:1fr] max-[900px]:[gap:30px] max-[900px]:[grid-template-columns:repeat(2,_1fr)]">

            <div class="[border-right-color:#8c9995] [border-right-style:solid] [border-right-width:1px] [padding-bottom:0] [padding-left:20px] [padding-right:20px] [padding-top:0] max-[900px]:[border-right-color:currentColor] max-[900px]:[border-right-style:none] max-[900px]:[border-right-width:medium]">
                <img class="[border-bottom-left-radius:0] [border-bottom-right-radius:0] [border-top-left-radius:0] [border-top-right-radius:0] [box-shadow:0_4px_10px_rgba(0,_0,_0,_0.15)] [display:block] [height:280px] [margin-bottom:12px] [margin-left:auto] [margin-right:auto] [margin-top:0] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=800&q=80" alt="Café">
                <h3 class="[font-size:17px] [font-weight:500] [margin-top:10px]">Café</h3>
                <p class="[color:#60746e] [font-size:13px] [line-height:1.4] [margin-top:8px]">Cozy Coffee<br>Moments</p>
            </div>

            <div class="[border-right-color:#8c9995] [border-right-style:solid] [border-right-width:1px] [padding-bottom:0] [padding-left:20px] [padding-right:20px] [padding-top:0] max-[900px]:[border-right-color:currentColor] max-[900px]:[border-right-style:none] max-[900px]:[border-right-width:medium]">
                <img class="[border-bottom-left-radius:0] [border-bottom-right-radius:0] [border-top-left-radius:0] [border-top-right-radius:0] [box-shadow:0_4px_10px_rgba(0,_0,_0,_0.15)] [display:block] [height:280px] [margin-bottom:12px] [margin-left:auto] [margin-right:auto] [margin-top:0] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&w=800&q=80" alt="Spa">
                <h3 class="[font-size:17px] [font-weight:500] [margin-top:10px]">Spa</h3>
                <p class="[color:#60746e] [font-size:13px] [line-height:1.4] [margin-top:8px]">Relaxing<br>Treatments</p>
            </div>

            <div class="[border-right-color:#8c9995] [border-right-style:solid] [border-right-width:1px] [padding-bottom:0] [padding-left:20px] [padding-right:20px] [padding-top:0] max-[900px]:[border-right-color:currentColor] max-[900px]:[border-right-style:none] max-[900px]:[border-right-width:medium]">
                <img class="[border-bottom-left-radius:0] [border-bottom-right-radius:0] [border-top-left-radius:0] [border-top-right-radius:0] [box-shadow:0_4px_10px_rgba(0,_0,_0,_0.15)] [display:block] [height:280px] [margin-bottom:12px] [margin-left:auto] [margin-right:auto] [margin-top:0] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=800&q=80" alt="Restaurant">
                <h3 class="[font-size:17px] [font-weight:500] [margin-top:10px]">Restaurant</h3>
                <p class="[color:#60746e] [font-size:13px] [line-height:1.4] [margin-top:8px]">Elevated Dining<br>Experience</p>
            </div>

            <div class="[border-right-color:#8c9995] [border-right-style:solid] [border-right-width:1px] [padding-bottom:0] [padding-left:20px] [padding-right:20px] [padding-top:0] max-[900px]:[border-right-color:currentColor] max-[900px]:[border-right-style:none] max-[900px]:[border-right-width:medium]">
                <img class="[border-bottom-left-radius:0] [border-bottom-right-radius:0] [border-top-left-radius:0] [border-top-right-radius:0] [box-shadow:0_4px_10px_rgba(0,_0,_0,_0.15)] [display:block] [height:280px] [margin-bottom:12px] [margin-left:auto] [margin-right:auto] [margin-top:0] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80" alt="Infinity Pool">
                <h3 class="[font-size:17px] [font-weight:500] [margin-top:10px]">Infinity Pool</h3>
                <p class="[color:#60746e] [font-size:13px] [line-height:1.4] [margin-top:8px]">Endless<br>Views</p>
            </div>

            <div class="[border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [padding-bottom:0] [padding-left:20px] [padding-right:20px] [padding-top:0] max-[900px]:[border-right-color:currentColor] max-[900px]:[border-right-style:none] max-[900px]:[border-right-width:medium]">
                <img class="[border-bottom-left-radius:0] [border-bottom-right-radius:0] [border-top-left-radius:0] [border-top-right-radius:0] [box-shadow:0_4px_10px_rgba(0,_0,_0,_0.15)] [display:block] [height:280px] [margin-bottom:12px] [margin-left:auto] [margin-right:auto] [margin-top:0] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=800&q=80" alt="Lounge">
                <h3 class="[font-size:17px] [font-weight:500] [margin-top:10px]">Lounge</h3>
                <p class="[color:#60746e] [font-size:13px] [line-height:1.4] [margin-top:8px]">Serene Nature<br>Retreat</p>
            </div>

        </div>

        <p class="[color:#60746e] [font-size:9px] [letter-spacing:2px] [margin-top:28px]">
            Thoughtfully curated for your stay
        </p>

    </section>

    <section id="rooms" class="[background-color:#254d47] [color:white] [padding-bottom:30px] [padding-left:4%] [padding-right:4%] [padding-top:40px]">

        <div class="[text-align:center]">

            <p class="[font-size:10px] [letter-spacing:2px]">ROOMS &amp; SUITES</p>

            <h2 class='[font-family:"Playfair_Display",_serif] [font-size:28px] [font-weight:400] [margin-top:5px]'>
                Stay in Coastal Elegance
            </h2>

        </div>

        <div class="[display:grid] [gap:35px] [grid-template-columns:repeat(3,_1fr)] [margin-top:25px] max-[900px]:[grid-template-columns:1fr]">

            <article class="[background-color:white] [box-shadow:0_3px_8px_rgba(0,_0,_0,_.25)] [color:#294b45] [overflow:hidden]">

                <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=1000&q=80"
                    alt="Mistwood Suite" class="[display:block] [height:200px] [object-fit:cover] [width:100%]">

                <div class="[padding-bottom:10px] [padding-left:13px] [padding-right:13px] [padding-top:10px]">

                    <h3 class="[font-size:17px] [font-weight:500]">Mistwood Suite</h3>

                    <p class="[font-size:10px] [line-height:1.35] [margin-top:4px] [min-height:45px]">
                        A cozy retreat surrounded by lush greenery,
                        with a private balcony and peaceful forest views.
                    </p>

                    <div class="[align-items:center] [display:flex] [font-size:10px] [justify-content:space-between] [margin-top:8px]">

                        <span>
                            From <strong class="[font-size:17px]">$280</strong> / night
                        </span>

                        <a href="#" class="[align-items:center] [background-color:#254d47] [color:white] [display:flex] [font-size:18px] [height:24px] [justify-content:center] [text-decoration:none] [width:35px]">
                            →
                        </a>

                    </div>

                </div>

            </article>

            <article class="[background-color:white] [box-shadow:0_3px_8px_rgba(0,_0,_0,_.25)] [color:#294b45] [overflow:hidden]">

                <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1000&q=80"
                    alt="Willowmere Suite" class="[display:block] [height:200px] [object-fit:cover] [width:100%]">

                <div class="[padding-bottom:10px] [padding-left:13px] [padding-right:13px] [padding-top:10px]">

                    <h3 class="[font-size:17px] [font-weight:500]">Willowmere Suite</h3>

                    <p class="[font-size:10px] [line-height:1.35] [margin-top:4px] [min-height:45px]">
                        A spacious suite featuring sweeping mountain views,
                        warm interiors, and a relaxing private terrace.
                    </p>

                    <div class="[align-items:center] [display:flex] [font-size:10px] [justify-content:space-between] [margin-top:8px]">

                        <span>
                            From <strong class="[font-size:17px]">$175</strong> / night
                        </span>

                        <a href="#" class="[align-items:center] [background-color:#254d47] [color:white] [display:flex] [font-size:18px] [height:24px] [justify-content:center] [text-decoration:none] [width:35px]">
                            →
                        </a>

                    </div>

                </div>

            </article>

            <article class="[background-color:white] [box-shadow:0_3px_8px_rgba(0,_0,_0,_.25)] [color:#294b45] [overflow:hidden]">

                <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1000&q=80"
                    alt="Evermist Suite" class="[display:block] [height:200px] [object-fit:cover] [width:100%]">

                <div class="[padding-bottom:10px] [padding-left:13px] [padding-right:13px] [padding-top:10px]">

                    <h3 class="[font-size:17px] [font-weight:500]">Evermist Suite</h3>

                    <p class="[font-size:10px] [line-height:1.35] [margin-top:4px] [min-height:45px]">
                        An elegant escape with panoramic mountain scenery,
                        refined interiors, and a serene atmosphere.
                    </p>

                    <div class="[align-items:center] [display:flex] [font-size:10px] [justify-content:space-between] [margin-top:8px]">

                        <span>
                            From <strong class="[font-size:17px]">$280</strong> / night
                        </span>

                        <a href="#" class="[align-items:center] [background-color:#254d47] [color:white] [display:flex] [font-size:18px] [height:24px] [justify-content:center] [text-decoration:none] [width:35px]">
                            →
                        </a>

                    </div>

                </div>

            </article>

        </div>

        <p class="[color:#60746e] [font-size:9px] [letter-spacing:2px] [margin-top:28px]">
            Thoughtfully designed spaces that blend luxury with nature
        </p>

    </section>

    <section id="about" class="[align-items:center] [background-color:#f5f3ed] [display:flex] [min-height:390px] [padding-bottom:70px] [padding-left:5%] [padding-right:5%] [padding-top:70px] max-[900px]:[flex-direction:column]">

        <div class="[padding-right:50px] [width:40%] max-[900px]:[padding-right:0] max-[900px]:[width:100%]">

            <span class="[color:#b4874b] [font-size:12px] [font-weight:600] [letter-spacing:2px]">
                AVELUNE
            </span>

            <h2 class='[font-family:"Playfair_Display",_serif] [font-size:28px] [font-weight:500] [margin-top:10px]'>
                A Sanctuary by the Hill
            </h2>

            <p class="[font-size:17px] [line-height:1.35] [margin-top:18px]">
                Nestled among the hills and surrounded by quiet woodland,
                Avelune is a retreat designed to bring you closer to nature.
                Wake beside the infinity pool, and savor thoughtful moments
                in our forest-inspired spaces.
            </p>

        </div>

        <div class="[height:320px] [position:relative] [width:60%] max-[600px]:[height:300px] max-[900px]:[margin-top:30px] max-[900px]:[width:100%]">

            <img class="[height:230px] [object-fit:cover] [position:absolute] [right:0] [top:0] [width:65%]"
                src="https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&w=1200&q=80"
                alt="Avelune infinity pool">

            <img class="[border-bottom-color:#ddd] [border-bottom-style:solid] [border-bottom-width:1px] [border-left-color:#ddd] [border-left-style:solid] [border-left-width:1px] [border-right-color:#ddd] [border-right-style:solid] [border-right-width:1px] [border-top-color:#ddd] [border-top-style:solid] [border-top-width:1px] [bottom:0] [height:210px] [left:0] [object-fit:cover] [position:absolute] [width:50%]"
                src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1000&q=80"
                alt="Avelune restaurant">

        </div>

    </section>

    @include('components.footer')

</body>

</html>

