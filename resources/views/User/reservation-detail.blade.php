<!DOCTYPE html>
<html lang="en" class="[scroll-behavior:smooth]">

<he>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Reservation Details</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">
    </head>

    <body class="amenities-details-page text-white [background-color:#f5f3ed] [color:#294c44] [font-family:'Montserrat',_sans-serif]">

        @include('components.navbar')

        <section class='[background-image:url("https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=2000&q=85")] [background-position:center] [background-size:cover] [min-height:430px] [position:relative] max-[900px]:[min-height:430px]'>
            <div class="[background-color:rgba(0,_0,_0,_.35)] [inset:0] [position:absolute]"></div>

            <div class="[color:white] [left:5%] [position:absolute] [top:160px] [z-index:2] max-[600px]:[left:7%]">
                <h1 class='[font-family:"Playfair_Display",_serif] [font-size:80px] [font-weight:500] [letter-spacing:6px] [line-height:1.1] [margin-bottom:5px] [margin-left:0] [margin-right:0] [margin-top:5px] max-[600px]:[font-size:40px] max-[900px]:[font-size:50px]'>RESERVATION DETAILS</h1>
                <p>
                    Take a quick look at the room that <br>you reserved.
                </p>
            </div>
        </section>
<div class="reservation-detail-wrapper">
    <div class="reservation-container">

        <div class="[background-color:#f4f2ec] [box-sizing:border-box] [padding-bottom:4rem] [padding-left:0] [padding-right:0] [padding-top:2rem] [width:100%]">
    <div class="[box-sizing:border-box] [font-family:'Montserrat',_sans-serif] [margin-bottom:0] [margin-left:auto] [margin-right:auto] [margin-top:0] [max-width:900px] [padding-bottom:0] [padding-left:1.5rem] [padding-right:1.5rem] [padding-top:0]">

        <a href="/profiles" class="[color:#223830] [display:inline-block] [font-size:1.15rem] [font-weight:700] [margin-bottom:1.25rem] [text-decoration:none] hover:[color:#b58950]">
            &gt; Reservation Detail
        </a>

        <div class="[background-color:#ffffff] [box-shadow:0_4px_20px_rgba(0,_0,_0,_0.06)] [box-sizing:border-box] [display:block] [overflow:hidden] [position:relative]">
            
            <div class="[box-sizing:border-box] [display:flex] [flex-direction:column] [padding-bottom:0] [padding-left:2.5rem] [padding-right:2.5rem] [padding-top:2.5rem] [position:relative] [z-index:2] min-[768px]:[align-items:stretch] min-[768px]:[flex-direction:row] min-[768px]:[padding-bottom:0] min-[768px]:[padding-left:0] min-[768px]:[padding-right:0] min-[768px]:[padding-top:0]">
                <div class="[box-sizing:border-box] [width:100%] min-[768px]:[flex-shrink:0] min-[768px]:[margin-bottom:0] min-[768px]:[width:42%]">
                    <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=800&q=80"
                        alt="Evermist Suite" class="[display:block] [height:100%] [min-height:330px] [object-fit:cover] [width:100%]">
                </div>

                <div class="[box-sizing:border-box] [display:flex] [flex-direction:column] [padding-bottom:2.5rem] [padding-left:2.5rem] [padding-right:2.5rem] [padding-top:2.5rem] [width:100%] min-[768px]:[padding-bottom:2.5rem] min-[768px]:[padding-left:2.5rem] min-[768px]:[padding-right:2.5rem] min-[768px]:[padding-top:2.5rem] min-[768px]:[width:58%]">
                    <h2 class="[color:#b58950] [font-family:'Playfair_Display',_serif] [font-size:2rem] [font-weight:700] [letter-spacing:0.05em] [margin-bottom:1.5rem] [margin-left:0] [margin-right:0] [margin-top:0] [text-align:center]">EVERMIST SUITE</h2>

                    <div class="[box-sizing:border-box] [margin-bottom:1rem] [width:100%]">
                        <label class="[color:#223830] [display:block] [font-size:0.9rem] [font-weight:700] [margin-bottom:0.3rem]">Date:</label>
                        <div class="[background-color:#ffffff] [border-bottom-color:#e2e8f0] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-bottom-style:solid] [border-bottom-width:1px] [border-left-color:#e2e8f0] [border-left-style:solid] [border-left-width:1px] [border-right-color:#e2e8f0] [border-right-style:solid] [border-right-width:1px] [border-top-color:#e2e8f0] [border-top-left-radius:2px] [border-top-right-radius:2px] [border-top-style:solid] [border-top-width:1px] [box-sizing:border-box] [color:#2f3e35] [font-size:0.85rem] [font-weight:600] [padding-bottom:0.6rem] [padding-left:0.85rem] [padding-right:0.85rem] [padding-top:0.6rem] [white-space:normal] [width:100%] [word-break:break-word]">28/09/2026 - 30/09/2026</div>
                    </div>

                    <div class="[box-sizing:border-box] [margin-bottom:1rem] [width:100%]">
                        <label class="[color:#223830] [display:block] [font-size:0.9rem] [font-weight:700] [margin-bottom:0.3rem]">Status:</label>
                        <div class="[background-color:#ffffff] [border-bottom-color:#e2e8f0] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-bottom-style:solid] [border-bottom-width:1px] [border-left-color:#e2e8f0] [border-left-style:solid] [border-left-width:1px] [border-right-color:#e2e8f0] [border-right-style:solid] [border-right-width:1px] [border-top-color:#e2e8f0] [border-top-left-radius:2px] [border-top-right-radius:2px] [border-top-style:solid] [border-top-width:1px] [box-sizing:border-box] [color:#2f3e35] [font-size:0.85rem] [font-weight:600] [padding-bottom:0.6rem] [padding-left:0.85rem] [padding-right:0.85rem] [padding-top:0.6rem] [white-space:normal] [width:100%] [word-break:break-word]">Paid</div>
                    </div>

                    <div class="[box-sizing:border-box] [margin-bottom:1rem] [width:100%]">
                        <label class="[color:#223830] [display:block] [font-size:0.9rem] [font-weight:700] [margin-bottom:0.3rem]">Note:</label>
                        <div class="[background-color:#ffffff] [border-bottom-color:#e2e8f0] [border-bottom-left-radius:2px] [border-bottom-right-radius:2px] [border-bottom-style:solid] [border-bottom-width:1px] [border-left-color:#e2e8f0] [border-left-style:solid] [border-left-width:1px] [border-right-color:#e2e8f0] [border-right-style:solid] [border-right-width:1px] [border-top-color:#e2e8f0] [border-top-left-radius:2px] [border-top-right-radius:2px] [border-top-style:solid] [border-top-width:1px] [box-sizing:border-box] [color:#2f3e35] [font-size:0.85rem] [font-weight:600] [padding-bottom:0.6rem] [padding-left:0.85rem] [padding-right:0.85rem] [padding-top:0.6rem] [white-space:normal] [width:100%] [word-break:break-word]">Saya mau 10 air mineral, makasih.</div>
                    </div>
                </div>
            </div>

            <div class="[background-color:#223830] [box-sizing:border-box] [color:#ffffff] [display:flex] [flex-direction:column] [padding-bottom:1.25rem] [padding-left:2.5rem] [padding-right:2.5rem] [padding-top:1.25rem] [position:relative] [z-index:1] min-[768px]:[align-items:center] min-[768px]:[flex-direction:row] min-[768px]:[padding-bottom:1.25rem] min-[768px]:[padding-top:1.25rem]">
                <div class="min-[768px]:[width:42%]"></div>
                <div class="min-[768px]:[display:flex] min-[768px]:[flex-direction:column] min-[768px]:[padding-left:2.5rem] min-[768px]:[width:58%]">
                    <span class="[display:block] [font-size:1.35rem] [font-weight:700] [line-height:1.2]">Total:</span>
                    <span class="[display:block] [font-size:0.95rem] [font-weight:500] [margin-top:0.2rem] [opacity:0.9]">3.500.000</span>
                </div>
            </div>

        </div>

    </div>
</div>
        @include('components.footer')

    </body>

</html>