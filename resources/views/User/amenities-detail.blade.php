<!DOCTYPE html>
<html lang="en" class="[scroll-behavior:smooth]">

<he>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Amenities Details</title>

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
                <h1 class='[font-family:"Playfair_Display",_serif] [font-size:80px] [font-weight:500] [letter-spacing:6px] [line-height:1.1] [margin-bottom:5px] [margin-left:0] [margin-right:0] [margin-top:5px] max-[600px]:[font-size:40px] max-[900px]:[font-size:50px]'>AMENITIES DETAILS</h1>
                <p>
                </p>
            </div>
        </section>

 <div class="[background-color:#f4f2ec] [padding-bottom:4rem] [padding-left:0] [padding-right:0] [padding-top:2rem] [width:100%]">
    <div class="[font-family:'Montserrat',_sans-serif] [margin-bottom:0] [margin-left:auto] [margin-right:auto] [margin-top:0] [max-width:950px] [padding-bottom:0] [padding-left:1.5rem] [padding-right:1.5rem] [padding-top:0]">

        <a href="/amenities" class="[color:#223830] [display:inline-block] [font-size:1.15rem] [font-weight:700] [margin-bottom:1.5rem] [text-decoration:none] hover:[color:#b58950]">
            &gt; Amenities Detail
        </a>

        <div class="[background-color:#ffffff] [box-shadow:0_4px_15px_rgba(0,_0,_0,_0.05)] [padding-top:2.5rem] [position:relative]">
            
            <div class="[display:flex] [flex-direction:column] [padding-bottom:0] [padding-left:2.5rem] [padding-right:2.5rem] [padding-top:0] [position:relative] [z-index:2] min-[768px]:[align-items:flex-start] min-[768px]:[flex-direction:row]">
                <div class="[margin-bottom:1.5rem] [width:100%] min-[768px]:[flex-shrink:0] min-[768px]:[margin-bottom:-2.5rem] min-[768px]:[width:42%]">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=800&q=80"
                        alt="Lune Cafe" class="[border-bottom-left-radius:0] [border-bottom-right-radius:0] [border-top-left-radius:0] [border-top-right-radius:0] [box-shadow:0_4px_10px_rgba(0,_0,_0,_0.15)] [display:block] [height:280px] [margin-bottom:12px] [margin-left:auto] [margin-right:auto] [margin-top:0] [object-fit:cover] [width:100%]">
                </div>

          
                <div class="[padding-bottom:2rem] [width:100%] min-[768px]:[padding-bottom:3rem] min-[768px]:[padding-left:2.5rem] min-[768px]:[width:58%]">
                    <h2 class="[color:#b58950] [font-family:'Playfair_Display',_serif] [font-size:2.25rem] [font-weight:600] [letter-spacing:0.02em] [margin-bottom:1rem] [margin-top:0]">Lune Cafe</h2>
                    <p class="[color:#223830] [font-size:0.9rem] [line-height:1.6] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]">
                        Lune Café offers a serene sanctuary that blends harmoniously with the tranquility of its natural
                        surroundings. Embodying a philosophy of grace and elegance, the café is thoughtfully designed
                        for guests to slow down the pace of their day and savor every precious moment in a warm,
                        exclusive atmosphere.
                    </p>
                </div>
            </div>

            <div class="[background-color:#223830] [color:#ffffff] [display:flex] [flex-direction:column] [padding-bottom:1.25rem] [padding-left:2.5rem] [padding-right:2.5rem] [padding-top:1.25rem] [position:relative] [z-index:1] min-[768px]:[align-items:center] min-[768px]:[flex-direction:row]">
                <div class="min-[768px]:[width:42%]"></div> <!-- Penyeimbang kolom foto -->
                <div class="min-[768px]:[display:flex] min-[768px]:[flex-direction:column] min-[768px]:[padding-left:2.5rem] min-[768px]:[width:58%]">
                    <span class="[display:block] [font-size:1.35rem] [font-weight:700] [line-height:1.2]">Everyday</span>
                    <span class="[display:block] [font-size:0.95rem] [font-weight:400] [margin-top:0.2rem] [opacity:0.9]">7 a.m. - 8 p.m.</span>
                </div>
            </div>

        </div>

    </div>
</div>
        @include('components.footer')

    </body>

</html>