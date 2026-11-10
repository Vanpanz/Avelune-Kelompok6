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

    <section class='[background-image:url("https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=2000&q=85")] [background-position:center] [background-size:cover] [min-height:430px] [position:relative] max-[900px]:[min-height:430px]'>
        <div class="[background-color:rgba(0,_0,_0,_.35)] [inset:0] [position:absolute]"></div>

        <div class="[color:white] [left:5%] [max-width:390px] [position:absolute] [top:155px] [z-index:2] max-[600px]:[left:7%] max-[650px]:[left:7%] max-[650px]:[right:7%] max-[650px]:[top:140px]">
            <h1 class='[font-family:"Playfair_Display",_serif] [font-size:clamp(42px,_5vw,_68px)] [font-weight:500] [letter-spacing:4px] [line-height:1.1] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0] max-[600px]:[font-size:40px] max-[650px]:[font-size:40px] max-[900px]:[font-size:50px]'>ACCOMMODATION</h1>
            <p class="[font-size:15px] [line-height:1.45] [margin-top:12px] [max-width:360px]">
                Discover our selection of thoughtfully designed rooms and suites that blend luxury with nature.
            </p>
        </div>

        <div class="[align-items:center] [background-color:#254d47] [bottom:-64px] [box-shadow:0_5px_12px_rgba(0,_0,_0,_.25)] [color:white] [display:block] [left:50%] [min-height:0] [padding-bottom:14px] [padding-left:22px] [padding-right:22px] [padding-top:18px] [position:absolute] [transform:translateX(-50%)] [width:min(920px,_82%)] [z-index:5] max-[600px]:[bottom:auto] max-[600px]:[left:auto] max-[600px]:[margin-bottom:0] max-[600px]:[margin-left:auto] max-[600px]:[margin-right:auto] max-[600px]:[margin-top:-40px] max-[600px]:[position:relative] max-[600px]:[transform:none] max-[650px]:[bottom:auto] max-[650px]:[left:auto] max-[650px]:[margin-bottom:0] max-[650px]:[margin-left:auto] max-[650px]:[margin-right:auto] max-[650px]:[margin-top:-48px] max-[650px]:[position:relative] max-[650px]:[transform:none] max-[650px]:[width:90%] max-[900px]:[flex-wrap:wrap] max-[900px]:[width:90%]">
            <p class="[color:#fff] [font-size:13px] [letter-spacing:1px] [margin-bottom:12px]">CHECK AVAILABILITY</p>
            
            <div class="[align-items:center] [display:flex] [gap:16px] max-[650px]:[align-items:stretch] max-[650px]:[flex-direction:column]">
                <div class="[background-color:#fff] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:0] [border-left-color:currentColor] [border-left-style:none] [border-left-width:0] [border-right-color:currentColor] [border-right-style:none] [border-right-width:0] [border-top-color:currentColor] [border-top-style:none] [border-top-width:0] [color:#294b45] [min-width:150px] [padding-bottom:9px] [padding-left:12px] [padding-right:12px] [padding-top:9px] [width:auto] max-[600px]:[border-left-color:currentColor] max-[600px]:[border-left-style:none] max-[600px]:[border-left-width:medium] max-[600px]:[padding-bottom:12px] max-[600px]:[padding-left:20px] max-[600px]:[padding-right:20px] max-[600px]:[padding-top:12px] max-[600px]:[width:100%] max-[900px]:[width:50%]">
                    <label class="[color:#294b45] [display:block] [font-size:9px] [letter-spacing:0] [margin-bottom:4px] [text-transform:none]">Check In</label>
                    <div class="[align-items:center] [color:#60746e] [display:flex] [font-size:9px] [gap:8px] [justify-content:flex-start] [line-height:1] [min-height:20px]">
                        <span>21 Aug 2026</span>
                        <img class="[display:block] [flex-basis:17px] [flex-grow:0] [flex-shrink:0] [height:17px] [object-fit:contain] [width:17px]" src="{{ asset('images/akar-icons--calendar.png') }}" alt="Calendar">
                    </div>
                </div>

                <div class="[background-color:#fff] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:0] [border-left-color:currentColor] [border-left-style:none] [border-left-width:0] [border-right-color:currentColor] [border-right-style:none] [border-right-width:0] [border-top-color:currentColor] [border-top-style:none] [border-top-width:0] [color:#294b45] [min-width:150px] [padding-bottom:9px] [padding-left:12px] [padding-right:12px] [padding-top:9px] [width:auto] max-[600px]:[border-left-color:currentColor] max-[600px]:[border-left-style:none] max-[600px]:[border-left-width:medium] max-[600px]:[padding-bottom:12px] max-[600px]:[padding-left:20px] max-[600px]:[padding-right:20px] max-[600px]:[padding-top:12px] max-[600px]:[width:100%] max-[900px]:[width:50%]">
                    <label class="[color:#294b45] [display:block] [font-size:9px] [letter-spacing:0] [margin-bottom:4px] [text-transform:none]">Check Out</label>
                    <div class="[align-items:center] [color:#60746e] [display:flex] [font-size:9px] [gap:8px] [justify-content:flex-start] [line-height:1] [min-height:20px]">
                        <span>23 Aug 2026</span>
                        <img class="[display:block] [flex-basis:17px] [flex-grow:0] [flex-shrink:0] [height:17px] [object-fit:contain] [width:17px]" src="{{ asset('images/akar-icons--calendar.png') }}" alt="Calendar">
                    </div>
                </div>

                <div class="[background-color:#fff] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:0] [border-left-color:currentColor] [border-left-style:none] [border-left-width:0] [border-right-color:currentColor] [border-right-style:none] [border-right-width:0] [border-top-color:currentColor] [border-top-style:none] [border-top-width:0] [color:#294b45] [min-width:150px] [padding-bottom:9px] [padding-left:12px] [padding-right:12px] [padding-top:9px] [width:auto] max-[600px]:[border-left-color:currentColor] max-[600px]:[border-left-style:none] max-[600px]:[border-left-width:medium] max-[600px]:[padding-bottom:12px] max-[600px]:[padding-left:20px] max-[600px]:[padding-right:20px] max-[600px]:[padding-top:12px] max-[600px]:[width:100%] max-[900px]:[width:50%]">
                    <label class="[color:#294b45] [display:block] [font-size:9px] [letter-spacing:0] [margin-bottom:4px] [text-transform:none]">Guests</label>
                    <div class="[align-items:center] [color:#60746e] [display:flex] [font-size:9px] [justify-content:space-between] [min-height:20px]">
                        <i class="[border-bottom-color:currentColor] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-bottom-style:solid] [border-bottom-width:1.5px] [border-left-color:currentColor] [border-left-style:solid] [border-left-width:1.5px] [border-right-color:currentColor] [border-right-style:solid] [border-right-width:1.5px] [border-top-color:currentColor] [border-top-left-radius:2px] [border-top-right-radius:2px] [border-top-style:solid] [border-top-width:1.5px] [display:inline-block] [height:12px] [opacity:0.7] [width:12px]"></i>
                        <span>2 Guests</span>
                    </div>
                </div>

                <button class="[background-color:#a7793f] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:medium] [border-left-color:currentColor] [border-left-style:none] [border-left-width:medium] [border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [border-top-color:currentColor] [border-top-style:none] [border-top-width:medium] [color:white] [cursor:pointer] [flex-basis:auto] [flex-grow:0] [flex-shrink:0] [font-size:9px] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0] [padding-bottom:11px] [padding-left:18px] [padding-right:18px] [padding-top:11px] max-[900px]:[margin-bottom:10px] max-[900px]:[margin-left:auto] max-[900px]:[margin-right:auto] max-[900px]:[margin-top:10px]">SEARCH AVAILABILITY</button>
            </div>
            
            <span class="[color:rgba(255,_255,_255,_.78)] [display:block] [font-size:8px] [margin-top:10px] [text-align:center]">Best rate guarantee when you book direct with us</span>
        </div>
    </section>

    <section class="[background-color:#f5f3ed] [padding-bottom:55px] [padding-left:3%] [padding-right:3%] [padding-top:95px] max-[650px]:[padding-top:65px]">
        <div class="[align-items:flex-end] [display:flex] [justify-content:space-between] [margin-bottom:22px] [margin-left:auto] [margin-right:auto] [margin-top:0] [width:min(1280px,_100%)] max-[650px]:[align-items:stretch] max-[650px]:[flex-direction:column]">
            <div>
                <h2 class="[color:#294b45] [font-size:20px] [font-weight:500] [letter-spacing:1px]">AVAILABLE ROOMS</h2>
                <p class="[color:#60746e] [font-size:10px] [margin-top:5px]">3 rooms available for your stay (21 - 23 Aug 2026)</p>
            </div>
            <div class="[align-items:center] [color:#60746e] [display:flex] [font-size:9px] [gap:12px]">
                <label>SORT BY</label>
                <select class="[background-color:#fff] [border-bottom-color:#c5cfca] [border-bottom-style:solid] [border-bottom-width:1px] [border-left-color:#c5cfca] [border-left-style:solid] [border-left-width:1px] [border-right-color:#c5cfca] [border-right-style:solid] [border-right-width:1px] [border-top-color:#c5cfca] [border-top-style:solid] [border-top-width:1px] [color:#294b45] [font-family:inherit] [font-size:inherit] [font-stretch:inherit] [font-style:inherit] [font-variant:inherit] [font-weight:inherit] [line-height:inherit] [padding-bottom:8px] [padding-left:12px] [padding-right:12px] [padding-top:8px]">
                    <option>Recommended</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                </select>
            </div>
        </div>

        <div class="[display:grid] [gap:26px] [grid-template-columns:repeat(3,_minmax(0,_1fr))] [margin-bottom:0] [margin-left:auto] [margin-right:auto] [margin-top:0] [width:min(1280px,_100%)] max-[650px]:[grid-template-columns:1fr] max-[900px]:[grid-template-columns:1fr]">
            <article class="[background-color:#fff] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:0] [border-left-color:currentColor] [border-left-style:none] [border-left-width:0] [border-right-color:currentColor] [border-right-style:none] [border-right-width:0] [border-top-color:currentColor] [border-top-style:none] [border-top-width:0] [box-shadow:0_3px_8px_rgba(0,_0,_0,_.2)] [color:#294b45] [overflow:hidden]">
                <div class="[position:relative]">
                    <span class="[background-color:#254d47] [color:#fff] [font-size:8px] [left:12px] [letter-spacing:.4px] [padding-bottom:5px] [padding-left:9px] [padding-right:9px] [padding-top:5px] [position:absolute] [top:10px] [z-index:1]">AVAILABLE</span>
                    <img class="[display:block] [height:205px] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=1000&q=80" alt="Mistwood Suite">
                </div>
                <div class="[padding-bottom:13px] [padding-left:14px] [padding-right:14px] [padding-top:12px]">
                    <div class="[align-items:baseline] [display:flex] [gap:8px] [justify-content:space-between]">
                        <h3 class="[font-size:16px] [font-weight:500]">Mistwood Suite</h3>
                        <span class="[color:#60746e] [font-size:9px] [white-space:nowrap]"><strong class="[color:#a7793f] [font-size:15px]">$280</strong> / night</span>
                    </div>
                    <p class="[color:#60746e] [font-size:9px] [line-height:1.4] [margin-top:7px] [min-height:42px]">A cozy retreat surrounded by lush greenery, with a private balcony and peaceful forest views.</p>
                    
                    <div class="[color:#60746e] [display:flex] [flex-wrap:wrap] [font-size:9px] [gap:10px] [margin-bottom:12px] [margin-left:0] [margin-right:0] [margin-top:12px]">
                        <span class="[align-items:center] [display:inline-flex] [gap:5px]"><i class="[border-bottom-color:currentColor] [border-bottom-left-radius:50%] [border-bottom-right-radius:50%] [border-bottom-style:solid] [border-bottom-width:1.5px] [border-left-color:currentColor] [border-left-style:solid] [border-left-width:1.5px] [border-right-color:currentColor] [border-right-style:solid] [border-right-width:1.5px] [border-top-color:currentColor] [border-top-left-radius:50%] [border-top-right-radius:50%] [border-top-style:solid] [border-top-width:1.5px] [display:inline-block] [height:12px] [opacity:0.7] [width:12px]"></i> 2 Guests</span>
                        <span class="[align-items:center] [display:inline-flex] [gap:5px]"><i class="[border-bottom-color:currentColor] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-bottom-style:solid] [border-bottom-width:3px] [border-left-color:currentColor] [border-left-style:solid] [border-left-width:1.5px] [border-right-color:currentColor] [border-right-style:solid] [border-right-width:1.5px] [border-top-color:currentColor] [border-top-left-radius:2px] [border-top-right-radius:2px] [border-top-style:solid] [border-top-width:1.5px] [display:inline-block] [height:12px] [opacity:0.7] [width:12px]"></i> 1 King Bed</span>
                        <span class="[align-items:center] [display:inline-flex] [gap:5px]"><i class="[border-bottom-color:currentColor] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-bottom-style:solid] [border-bottom-width:1.5px] [border-left-color:currentColor] [border-left-style:solid] [border-left-width:1.5px] [border-right-color:currentColor] [border-right-style:solid] [border-right-width:1.5px] [border-style:dashed] [border-top-color:currentColor] [border-top-left-radius:2px] [border-top-right-radius:2px] [border-top-style:solid] [border-top-width:1.5px] [display:inline-block] [height:12px] [opacity:0.7] [width:12px]"></i> 55 m²</span>
                        <span class="[align-items:center] [display:inline-flex] [gap:5px]"><i class="[border-bottom-color:currentColor] [border-bottom-left-radius:0] [border-bottom-right-radius:0] [border-bottom-style:solid] [border-bottom-width:1.5px] [border-left-color:currentColor] [border-left-style:solid] [border-left-width:1.5px] [border-right-color:currentColor] [border-right-style:solid] [border-right-width:1.5px] [border-top-color:currentColor] [border-top-left-radius:50%] [border-top-right-radius:50%] [border-top-style:solid] [border-top-width:1.5px] [display:inline-block] [height:12px] [opacity:0.7] [width:12px]"></i> Wi-Fi</span>
                    </div>

                    <a href="{{ route('reservation') }}" class="[background-color:#254d47] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:0] [border-left-color:currentColor] [border-left-style:none] [border-left-width:0] [border-right-color:currentColor] [border-right-style:none] [border-right-width:0] [border-top-color:currentColor] [border-top-style:none] [border-top-width:0] [color:#fff] [cursor:pointer] [display:block] [font-size:8px] [font-weight:600] [letter-spacing:0.05em] [margin-left:auto] [padding-bottom:8px] [padding-left:6px] [padding-right:6px] [padding-top:8px] [text-align:center] [text-decoration:none] [text-transform:uppercase] [transition:background-color_0.2s_ease] [width:95px] hover:[background-color:#1a2c26]">BOOK NOW</a>
                </div>
            </article>

            <article class="[background-color:#fff] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:0] [border-left-color:currentColor] [border-left-style:none] [border-left-width:0] [border-right-color:currentColor] [border-right-style:none] [border-right-width:0] [border-top-color:currentColor] [border-top-style:none] [border-top-width:0] [box-shadow:0_3px_8px_rgba(0,_0,_0,_.2)] [color:#294b45] [overflow:hidden]">
                <div class="[position:relative]">
                    <span class="[background-color:#254d47] [color:#fff] [font-size:8px] [left:12px] [letter-spacing:.4px] [padding-bottom:5px] [padding-left:9px] [padding-right:9px] [padding-top:5px] [position:absolute] [top:10px] [z-index:1]">AVAILABLE</span>
                    <img class="[display:block] [height:205px] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1000&q=80" alt="Willowmere Suite">
                </div>
                <div class="[padding-bottom:13px] [padding-left:14px] [padding-right:14px] [padding-top:12px]">
                    <div class="[align-items:baseline] [display:flex] [gap:8px] [justify-content:space-between]">
                        <h3 class="[font-size:16px] [font-weight:500]">Willowmere Suite</h3>
                        <span class="[color:#60746e] [font-size:9px] [white-space:nowrap]"><strong class="[color:#a7793f] [font-size:15px]">$175</strong> / night</span>
                    </div>
                    <p class="[color:#60746e] [font-size:9px] [line-height:1.4] [margin-top:7px] [min-height:42px]">A spacious suite featuring sweeping mountain views, warm interiors, and a relaxing private terrace.</p>
                    
                    <div class="[color:#60746e] [display:flex] [flex-wrap:wrap] [font-size:9px] [gap:10px] [margin-bottom:12px] [margin-left:0] [margin-right:0] [margin-top:12px]">
                        <span class="[align-items:center] [display:inline-flex] [gap:5px]"><i class="[border-bottom-color:currentColor] [border-bottom-left-radius:50%] [border-bottom-right-radius:50%] [border-bottom-style:solid] [border-bottom-width:1.5px] [border-left-color:currentColor] [border-left-style:solid] [border-left-width:1.5px] [border-right-color:currentColor] [border-right-style:solid] [border-right-width:1.5px] [border-top-color:currentColor] [border-top-left-radius:50%] [border-top-right-radius:50%] [border-top-style:solid] [border-top-width:1.5px] [display:inline-block] [height:12px] [opacity:0.7] [width:12px]"></i> 2 Guests</span>
                        <span class="[align-items:center] [display:inline-flex] [gap:5px]"><i class="[border-bottom-color:currentColor] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-bottom-style:solid] [border-bottom-width:3px] [border-left-color:currentColor] [border-left-style:solid] [border-left-width:1.5px] [border-right-color:currentColor] [border-right-style:solid] [border-right-width:1.5px] [border-top-color:currentColor] [border-top-left-radius:2px] [border-top-right-radius:2px] [border-top-style:solid] [border-top-width:1.5px] [display:inline-block] [height:12px] [opacity:0.7] [width:12px]"></i> 2 Twin Beds</span>
                        <span class="[align-items:center] [display:inline-flex] [gap:5px]"><i class="[border-bottom-color:currentColor] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-bottom-style:solid] [border-bottom-width:1.5px] [border-left-color:currentColor] [border-left-style:solid] [border-left-width:1.5px] [border-right-color:currentColor] [border-right-style:solid] [border-right-width:1.5px] [border-style:dashed] [border-top-color:currentColor] [border-top-left-radius:2px] [border-top-right-radius:2px] [border-top-style:solid] [border-top-width:1.5px] [display:inline-block] [height:12px] [opacity:0.7] [width:12px]"></i> 45 m²</span>
                        <span class="[align-items:center] [display:inline-flex] [gap:5px]"><i class="[border-bottom-color:currentColor] [border-bottom-left-radius:0] [border-bottom-right-radius:0] [border-bottom-style:solid] [border-bottom-width:1.5px] [border-left-color:currentColor] [border-left-style:solid] [border-left-width:1.5px] [border-right-color:currentColor] [border-right-style:solid] [border-right-width:1.5px] [border-top-color:currentColor] [border-top-left-radius:50%] [border-top-right-radius:50%] [border-top-style:solid] [border-top-width:1.5px] [display:inline-block] [height:12px] [opacity:0.7] [width:12px]"></i> Wi-Fi</span>
                    </div>

                    <a href="{{ route('reservation') }}" class="[background-color:#254d47] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:0] [border-left-color:currentColor] [border-left-style:none] [border-left-width:0] [border-right-color:currentColor] [border-right-style:none] [border-right-width:0] [border-top-color:currentColor] [border-top-style:none] [border-top-width:0] [color:#fff] [cursor:pointer] [display:block] [font-size:8px] [font-weight:600] [letter-spacing:0.05em] [margin-left:auto] [padding-bottom:8px] [padding-left:6px] [padding-right:6px] [padding-top:8px] [text-align:center] [text-decoration:none] [text-transform:uppercase] [transition:background-color_0.2s_ease] [width:95px] hover:[background-color:#1a2c26]">BOOK NOW</a>
                </div>
            </article>

            <article class="[background-color:#fff] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:0] [border-left-color:currentColor] [border-left-style:none] [border-left-width:0] [border-right-color:currentColor] [border-right-style:none] [border-right-width:0] [border-top-color:currentColor] [border-top-style:none] [border-top-width:0] [box-shadow:0_3px_8px_rgba(0,_0,_0,_.2)] [color:#294b45] [overflow:hidden]">
                <div class="[position:relative]">
                    <span class="[background-color:#a7793f] [color:#fff] [font-size:8px] [left:12px] [letter-spacing:.4px] [padding-bottom:5px] [padding-left:9px] [padding-right:9px] [padding-top:5px] [position:absolute] [top:10px] [z-index:1]">BOOKED</span>
                    <img class="[display:block] [height:205px] [object-fit:cover] [width:100%]" src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1000&q=80" alt="Evermist Suite">
                </div>
                <div class="[padding-bottom:13px] [padding-left:14px] [padding-right:14px] [padding-top:12px]">
                    <div class="[align-items:baseline] [display:flex] [gap:8px] [justify-content:space-between]">
                        <h3 class="[font-size:16px] [font-weight:500]">Evermist Suite</h3>
                        <span class="[color:#60746e] [font-size:9px] [white-space:nowrap]"><strong class="[color:#a7793f] [font-size:15px]">$280</strong> / night</span>
                    </div>
                    <p class="[color:#60746e] [font-size:9px] [line-height:1.4] [margin-top:7px] [min-height:42px]">An elegant escape with panoramic mountain scenery, refined interiors, and a serene atmosphere.</p>
                    
                    <div class="[color:#60746e] [display:flex] [flex-wrap:wrap] [font-size:9px] [gap:10px] [margin-bottom:12px] [margin-left:0] [margin-right:0] [margin-top:12px]">
                        <span class="[align-items:center] [display:inline-flex] [gap:5px]"><i class="[border-bottom-color:currentColor] [border-bottom-left-radius:50%] [border-bottom-right-radius:50%] [border-bottom-style:solid] [border-bottom-width:1.5px] [border-left-color:currentColor] [border-left-style:solid] [border-left-width:1.5px] [border-right-color:currentColor] [border-right-style:solid] [border-right-width:1.5px] [border-top-color:currentColor] [border-top-left-radius:50%] [border-top-right-radius:50%] [border-top-style:solid] [border-top-width:1.5px] [display:inline-block] [height:12px] [opacity:0.7] [width:12px]"></i> 2 Guests</span>
                        <span class="[align-items:center] [display:inline-flex] [gap:5px]"><i class="[border-bottom-color:currentColor] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-bottom-style:solid] [border-bottom-width:3px] [border-left-color:currentColor] [border-left-style:solid] [border-left-width:1.5px] [border-right-color:currentColor] [border-right-style:solid] [border-right-width:1.5px] [border-top-color:currentColor] [border-top-left-radius:2px] [border-top-right-radius:2px] [border-top-style:solid] [border-top-width:1.5px] [display:inline-block] [height:12px] [opacity:0.7] [width:12px]"></i> 1 King Bed</span>
                        <span class="[align-items:center] [display:inline-flex] [gap:5px]"><i class="[border-bottom-color:currentColor] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-bottom-style:solid] [border-bottom-width:1.5px] [border-left-color:currentColor] [border-left-style:solid] [border-left-width:1.5px] [border-right-color:currentColor] [border-right-style:solid] [border-right-width:1.5px] [border-style:dashed] [border-top-color:currentColor] [border-top-left-radius:2px] [border-top-right-radius:2px] [border-top-style:solid] [border-top-width:1.5px] [display:inline-block] [height:12px] [opacity:0.7] [width:12px]"></i> 50 m²</span>
                        <span class="[align-items:center] [display:inline-flex] [gap:5px]"><i class="[border-bottom-color:currentColor] [border-bottom-left-radius:0] [border-bottom-right-radius:0] [border-bottom-style:solid] [border-bottom-width:1.5px] [border-left-color:currentColor] [border-left-style:solid] [border-left-width:1.5px] [border-right-color:currentColor] [border-right-style:solid] [border-right-width:1.5px] [border-top-color:currentColor] [border-top-left-radius:50%] [border-top-right-radius:50%] [border-top-style:solid] [border-top-width:1.5px] [display:inline-block] [height:12px] [opacity:0.7] [width:12px]"></i> Wi-Fi</span>
                    </div>

                    <button class="[background-color:#c9cbc9] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:0] [border-left-color:currentColor] [border-left-style:none] [border-left-width:0] [border-right-color:currentColor] [border-right-style:none] [border-right-width:0] [border-top-color:currentColor] [border-top-style:none] [border-top-width:0] [color:#fff] [cursor:not-allowed] [display:block] [font-size:8px] [margin-left:auto] [padding-bottom:8px] [padding-left:6px] [padding-right:6px] [padding-top:8px] [text-align:center] [width:95px]" disabled>NOT AVAILABLE</button>
                </div>
            </article>
        </div>
    </section>

    <section class="[display:grid] [gap:24px] [grid-template-columns:repeat(2,_minmax(0,_1fr))] [margin-bottom:55px] [margin-left:auto] [margin-right:auto] [margin-top:0] [width:min(1280px,_94%)] max-[650px]:[grid-template-columns:1fr]">
        <div class="[background-color:#254d47] [border-bottom-left-radius:8px] [border-bottom-right-radius:8px] [border-top-left-radius:8px] [border-top-right-radius:8px] [box-shadow:0_2px_6px_rgba(0,_0,_0,_.18)] [color:#fff] [display:flex] [min-height:180px] [overflow:hidden] max-[650px]:[min-height:170px]">
            <div class="[flex-basis:0%] [flex-grow:1] [flex-shrink:1] [padding-bottom:25px] [padding-left:18px] [padding-right:18px] [padding-top:25px]">
                <h2 class="[font-size:21px] [font-weight:500]">Closer To Nature</h2>
                <p class="[font-size:11px] [line-height:1.45] [margin-top:22px]">Wake up to the sound of the forest and breathe in the freshest mountain air. Your perfect escape awaits at Avelune Resort.</p>
            </div>
            <img class="[height:auto] [object-fit:cover] [width:45%]" src="https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&w=800&q=80" alt="Resort View">
        </div>

        <div class="[background-color:#fff] [border-bottom-left-radius:8px] [border-bottom-right-radius:8px] [border-top-left-radius:8px] [border-top-right-radius:8px] [box-shadow:0_2px_6px_rgba(0,_0,_0,_.18)] [color:#294b45] [display:flex] [min-height:180px] [overflow:hidden] max-[650px]:[min-height:170px]">
            <div class="[flex-basis:0%] [flex-grow:1] [flex-shrink:1] [padding-bottom:25px] [padding-left:18px] [padding-right:18px] [padding-top:25px]">
                <h2 class="[font-size:21px] [font-weight:500]">Best Rated Room</h2>
                <p class="[font-size:11px] [line-height:1.45] [margin-top:22px]">Wake up to the sound of the forest and breathe in the freshest mountain air. Your perfect escape awaits at Avelune Resort.</p>
            </div>
            <img class="[height:auto] [object-fit:cover] [width:45%]" src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="Interior View">
        </div>
    </section>

    @include('components.footer')

</body>

</html>