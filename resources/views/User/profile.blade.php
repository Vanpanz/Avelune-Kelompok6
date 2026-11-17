<!DOCTYPE html>
<html lang="en" class="[scroll-behavior:smooth]">

<he>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Profile</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">
    </head>

    <body class="profile-page text-white [background-color:#f5f3ed] [color:#294c44] [font-family:'Montserrat',_sans-serif]">

        @include('components.navbar')

         <section class='[background-image:url("https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=2000&q=85")] [background-position:center] [background-size:cover] [min-height:430px] [position:relative] max-[900px]:[min-height:430px]'>
            <div class="[background-color:rgba(0,_0,_0,_.35)] [inset:0] [position:absolute]"></div>

            <div class="[color:white] [left:5%] [position:absolute] [top:160px] [z-index:2] max-[600px]:[left:7%]">
                <h1 class='[font-family:"Playfair_Display",_serif] [font-size:80px] [font-weight:500] [letter-spacing:6px] [line-height:1.1] [margin-bottom:5px] [margin-left:0] [margin-right:0] [margin-top:5px] max-[600px]:[font-size:40px] max-[900px]:[font-size:50px]'>PROFILE</h1>
                <p>
                   Manage your account, reservations, <br>and preferences.
                </p>
            </div>
        </section>

        <main class="[background-color:#f4f2ec] [color:#333333] [font-family:'Montserrat',_sans-serif] [min-height:100vh] [padding-bottom:3rem] [padding-left:1rem] [padding-right:1rem] [padding-top:3rem]">
            <div class="[display:flex] [flex-direction:column] [gap:2.5rem] [margin-bottom:0] [margin-left:auto] [margin-right:auto] [margin-top:0] [max-width:56rem]">

                <section class="[display:flex] [flex-direction:column] [gap:1rem]">
                    <h2 class="[color:#223830] [font-family:'Montserrat',_sans-serif] [font-size:1.5rem] [font-weight:700] [letter-spacing:0.025em] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]">Personal Information</h2>

                    <div class="[align-items:center] [background-color:#ffffff] [box-shadow:0_1px_3px_rgba(0,_0,_0,_0.05)] [display:flex] [flex-direction:column] [gap:2rem] [padding-bottom:1.5rem] [padding-left:1.5rem] [padding-right:1.5rem] [padding-top:1.5rem] min-[640px]:[align-items:center] min-[640px]:[flex-direction:row]">
                        <div class="[border-bottom-left-radius:9999px] [border-bottom-right-radius:9999px] [border-top-left-radius:9999px] [border-top-right-radius:9999px] [flex-shrink:0] [height:9rem] [overflow:hidden] [width:9rem]">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80"
                                alt="Profile Picture" class="[height:100%] [object-fit:cover] [width:100%]">
                        </div>

                        <div class="[display:grid] [gap:1.25rem_2rem] [grid-template-columns:1fr] [width:100%] min-[640px]:[grid-template-columns:1fr_1fr]">
                            <div class="[display:flex] [flex-direction:column]">
                                <span class="[color:#b58950] [font-size:0.75rem] [font-weight:600] [letter-spacing:0.05em] [text-transform:uppercase]">FULL NAME</span>
                                <p class="[color:#2B463F] [font-size:0.875rem] [font-weight:500] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]">Zhang Zhen Yuan</p>
                            </div>

                            <div class="[display:flex] [flex-direction:column]">
                                <span class="[color:#b58950] [font-size:0.75rem] [font-weight:600] [letter-spacing:0.05em] [text-transform:uppercase]">COUNTRY</span>
                                <p class="[color:#2B463F] [font-size:0.875rem] [font-weight:500] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]">China</p>
                            </div>

                            <div class="[display:flex] [flex-direction:column]">
                                <span class="[color:#b58950] [font-size:0.75rem] [font-weight:600] [letter-spacing:0.05em] [text-transform:uppercase]">PHONE NUMBER</span>
                                <p class="[color:#2B463F] [font-size:0.875rem] [font-weight:500] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]">+62 143 0520 1434</p>
                            </div>

                            <div class="[display:flex] [flex-direction:column]">
                                <span class="[color:#b58950] [font-size:0.75rem] [font-weight:600] [letter-spacing:0.05em] [text-transform:uppercase]">EMAIL</span>
                                <p class="[color:#2B463F] [font-size:0.875rem] [font-weight:500] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]">zhengyuan145@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="[display:flex] [flex-direction:column] [gap:1rem]">
                    <h2 class="[color:#223830] [font-family:'Montserrat',_sans-serif] [font-size:1.5rem] [font-weight:700] [letter-spacing:0.025em] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]">Reservation</h2>

                    <div class="[background-color:#ffffff] [box-shadow:0_1px_3px_rgba(0,_0,_0,_0.05)] [display:flex] [flex-direction:column] [gap:1rem] [justify-content:space-between] [padding-bottom:1.5rem] [padding-left:1.5rem] [padding-right:1.5rem] [padding-top:1.5rem] min-[768px]:[align-items:flex-end] min-[768px]:[flex-direction:row]">
                        <div class="[display:flex] [flex-direction:column] [gap:1.25rem] [width:100%] min-[640px]:[align-items:flex-start] min-[640px]:[flex-direction:row]">
                            <div class="[border-bottom-left-radius:0.125rem] [border-bottom-right-radius:0.125rem] [border-top-left-radius:0.125rem] [border-top-right-radius:0.125rem] [flex-shrink:0] [height:9rem] [overflow:hidden] [width:100%] min-[640px]:[width:14rem]">
                                <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=600&q=80"
                                    alt="Evermist Suite" class="[height:100%] [object-fit:cover] [width:100%]">
                            </div>

                            <div class="[display:flex] [flex-direction:column] [gap:0.35rem]">
                                <h3 class="[color:#b58950] [font-family:'Montserrat',_sans-serif] [font-size:1.35rem] [font-weight:900] [letter-spacing:0.05em] [margin-bottom:0.1rem] [margin-left:0] [margin-right:0] [margin-top:0] [text-transform:uppercase]">EVERMIST SUITE</h3>
                                <div class="[color:#2B463F] [display:flex] [flex-direction:column] [font-family:'Montserrat',_sans-serif] [font-size:0.75rem] [font-weight:600] [gap:0.4rem] [letter-spacing:0.05em]">
                                    <p class="[line-height:1.4] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]"><strong class="[color:#2B463F] [font-weight:550]">Date:</strong> 26/09/2026 - 30/09/2026</p>
                                    <p class="[line-height:1.4] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]"><strong class="[color:#2B463F] [font-weight:550]">Status:</strong>Paid</p>
                                    <p class="[line-height:1.4] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]"><strong class="[color:#2B463F] [font-weight:550]">Note:</strong> Saya mau 10 air mineral, makasih.</p>
                                    <p class="[line-height:1.4] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]"><strong class="[color:#2B463F] [font-weight:550]">TOTAL:</strong> Rp 3.500.000 </p>
                                </div>
                            </div>
                        </div>

                        <div class="[display:flex] [justify-content:flex-end] [width:100%] min-[768px]:[width:auto]">
                            <a href="{{ url('/profiles/1') }}" class="[background-color:#b58950] [color:#ffffff] [display:inline-block] [font-size:0.75rem] [font-weight:600] [letter-spacing:0.05em] [padding-bottom:0.5rem] [padding-left:1.5rem] [padding-right:1.5rem] [padding-top:0.5rem] [text-decoration:none] [transition:background-color_0.2s_ease] hover:[background-color:#98703e]">Details</a>
                        </div>
                    </div>

                    <div class="[background-color:#ffffff] [box-shadow:0_1px_3px_rgba(0,_0,_0,_0.05)] [display:flex] [flex-direction:column] [gap:1rem] [justify-content:space-between] [padding-bottom:1.5rem] [padding-left:1.5rem] [padding-right:1.5rem] [padding-top:1.5rem] min-[768px]:[align-items:flex-end] min-[768px]:[flex-direction:row]">
                        <div class="[display:flex] [flex-direction:column] [gap:1.25rem] [width:100%] min-[640px]:[align-items:flex-start] min-[640px]:[flex-direction:row]">
                            <div class="[border-bottom-left-radius:0.125rem] [border-bottom-right-radius:0.125rem] [border-top-left-radius:0.125rem] [border-top-right-radius:0.125rem] [flex-shrink:0] [height:9rem] [overflow:hidden] [width:100%] min-[640px]:[width:14rem]">
                                <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=600&q=80"
                                    alt="Willowmere Suite" class="[height:100%] [object-fit:cover] [width:100%]">
                            </div>

                            <div class="[display:flex] [flex-direction:column] [gap:0.35rem]">
                                <h3 class="[color:#b58950] [font-family:'Montserrat',_sans-serif] [font-size:1.35rem] [font-weight:900] [letter-spacing:0.05em] [margin-bottom:0.1rem] [margin-left:0] [margin-right:0] [margin-top:0] [text-transform:uppercase]">WILLOWMERE SUITE</h3>
                                <div class="[color:#2B463F] [display:flex] [flex-direction:column] [font-family:'Montserrat',_sans-serif] [font-size:0.75rem] [font-weight:600] [gap:0.4rem] [letter-spacing:0.05em]">
                                    <p class="[line-height:1.4] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]"><strong class="[color:#2B463F] [font-weight:550]">Date:</strong> 20/11/2028 - 31/11/2028</p>
                                    <p class="[line-height:1.4] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]"><strong class="[color:#2B463F] [font-weight:550]">Status:</strong> Pending</p>
                                    <p class="[line-height:1.4] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]"><strong class="[color:#2B463F] [font-weight:550]">Note:</strong> Water heaternya rusak, tolong perbaiki.</p>
                                    <p class="[line-height:1.4] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]"><strong class="[color:#2B463F] [font-weight:550]">TOTAL:</strong> Rp 2.500.000 </p>
                                </div>
                            </div>
                        </div>

                        <div class="[display:flex] [justify-content:flex-end] [width:100%] min-[768px]:[width:auto]">
                           <a href="{{ url('/profiles/2') }}" class="[background-color:#b58950] [color:#ffffff] [display:inline-block] [font-size:0.75rem] [font-weight:600] [letter-spacing:0.05em] [padding-bottom:0.5rem] [padding-left:1.5rem] [padding-right:1.5rem] [padding-top:0.5rem] [text-decoration:none] [transition:background-color_0.2s_ease] hover:[background-color:#98703e]">Details</a>
                        </div>
                    </div>

                    <div class="[background-color:#ffffff] [box-shadow:0_1px_3px_rgba(0,_0,_0,_0.05)] [display:flex] [flex-direction:column] [gap:1rem] [justify-content:space-between] [padding-bottom:1.5rem] [padding-left:1.5rem] [padding-right:1.5rem] [padding-top:1.5rem] min-[768px]:[align-items:flex-end] min-[768px]:[flex-direction:row]">
                        <div class="[display:flex] [flex-direction:column] [gap:1.25rem] [width:100%] min-[640px]:[align-items:flex-start] min-[640px]:[flex-direction:row]">
                            <div class="[border-bottom-left-radius:0.125rem] [border-bottom-right-radius:0.125rem] [border-top-left-radius:0.125rem] [border-top-right-radius:0.125rem] [flex-shrink:0] [height:9rem] [overflow:hidden] [width:100%] min-[640px]:[width:14rem]">
                                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=600&q=80"
                                    alt="Mistwood Suite" class="[height:100%] [object-fit:cover] [width:100%]">
                            </div>

                            <div class="[display:flex] [flex-direction:column] [gap:0.35rem]">
                                <h3 class="[color:#b58950] [font-family:'Montserrat',_sans-serif] [font-size:1.35rem] [font-weight:900] [letter-spacing:0.05em] [margin-bottom:0.1rem] [margin-left:0] [margin-right:0] [margin-top:0] [text-transform:uppercase]">MISTWOOD SUITE</h3>
                                <div class="[color:#2B463F] [display:flex] [flex-direction:column] [font-family:'Montserrat',_sans-serif] [font-size:0.75rem] [font-weight:600] [gap:0.4rem] [letter-spacing:0.05em]">
                                    <p class="[line-height:1.4] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]"><strong class="[color:#2B463F] [font-weight:550]">Date:</strong> 29/02/2026 - 31/02/2026</p>
                                    <p class="[line-height:1.4] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]"><strong class="[color:#2B463F] [font-weight:550]">Status:</strong> Paid</p>
                                    <p class="[line-height:1.4] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]"><strong class="[color:#2B463F] [font-weight:550]">Note:</strong> mantap, alamnya ngalam banget, sesuai nama bngt, mistwood.</p>
                                    <p class="[line-height:1.4] [margin-bottom:0] [margin-left:0] [margin-right:0] [margin-top:0]"><strong class="[color:#2B463F] [font-weight:550]">TOTAL:</strong> Rp 1.800.000</p>
                                </div>
                            </div>
                        </div>

                        <div class="[display:flex] [justify-content:flex-end] [width:100%] min-[768px]:[width:auto]">
                            <a href="{{ url('/profiles/3') }}" class="[background-color:#b58950] [color:#ffffff] [display:inline-block] [font-size:0.75rem] [font-weight:600] [letter-spacing:0.05em] [padding-bottom:0.5rem] [padding-left:1.5rem] [padding-right:1.5rem] [padding-top:0.5rem] [text-decoration:none] [transition:background-color_0.2s_ease] hover:[background-color:#98703e]">Details</a>
                        </div>
                    </div>

                </section>

            </div>
        </main>

        <x-footer />

        @include('components.footer')

    </body>

</html>