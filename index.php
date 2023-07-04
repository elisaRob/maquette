<?php require_once 'head.php'?>
<link rel="stylesheet" href="assets/style.css">
<script src="app.js" defer></script>
<?php require_once 'header.php' ?>

        <div class="containerHeaderImage">
            <div class="containerDiapo1">
               <img class="diaporamaImage active" src="assets/img/diaporama2.jpg" alt="image">
               <img class="diaporamaImage" src="assets/img/visu_diaporama1@2x.png" alt="image"> 
               <img class="diaporamaImage" src="assets/img/diaporama3.png" alt="image">
                <img class="diaporamaImage" src="assets/img/diaporama4.jpg" alt="image">
                <div class="containerH2DiaporamaImage ">
                    <h2 class="h2DiaporamaImage active">La pêche à la carpe</h2>
                    <h2 class="h2DiaporamaImage">La pêche au silure</h2>
                    <h2 class="h2DiaporamaImage">Le matériels et appâts</h2>
                    <h2 class="h2DiaporamaImage">Blog</h2>
                </div>
                <div class="containerPresentationDiaporamaImage">
                    <p class="paragraphe1" >Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    <p class="paragrraphe2">Vivamus mattis imperdiet tincidunt.Sed faucibus imperdiet dolor.</p>
                </div>
                <div class="containerPresentationDiaporamaImageResponsive">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis imperdiet tincidunt. Sed faucibus imperdiet dolor.</p>
                </div>
                <div class="containerPlanDEauDiaporamaImage">
                    <img src="assets/img/logo_plan_eau.svg" alt="">
                </div>
                <div class="containerComplementInformationDiaporamaImage">
                    <p>2ème catégorie</p>
                    <p>Superficie : 3.5 Ha - GPS : 46°47’32’’N 0°32’24’’E</p>
                    <p>Ouvert du 1er janvier au 31 décembre - Carte de pêche obligatoire</p>
                </div>
                
                <div class="containerComplementInformationDiaporamaImageResponsive">
                    <p>2ème catégorie</p>
                    <p>Superficie : 3.5 Ha - GPS : 46°47’32’’N 0°32’24’’E</p>
                    <p>Ouvert du 1er janvier au 31 décembre </p>
                    <p>Carte de pêche obligatoire</p>
                </div>
                
                <div class="containerBoutonDiaporamaImage">
                    <a href="pechealacarpe_1.php" class="lienSavoir">
                        <button >EN SAVOIR +</button>
                    </a>                    
                </div>

                <div class="containerSvgFlecheGaucheDiaporamaImage">
                    <a href="#" class="precedent">
                        <img src="assets/img/bt_diapo_gauche.svg" alt="">
                    </a>                   
                </div>

                <div class="containerSvgFlecheDroiteDiaporamaImage">
                    <a href="#" class="suivant">
                        <img src="assets/img/bt_diapo_droite (1).svg" alt="">
                    </a>
                </div>

                <div class="containerTraitEtChiffreADroiteDiaporamaImage">
                    <span class="trait1"></span>
                    <a href="#" class=" chiffre chiffreA1" data-chiffre="1"><span class="chiffreSpan chiffre1 active">1</span></a>
                    <a href="#" class="chiffre chiffreA2" data-chiffre="2"><span class="chiffreSpan chiffre2">2</span></a>
                    <a href="#" class=" chiffre chiffreA3" data-chiffre="3"><span class="chiffreSpan chiffre3">3</span></a>
                    <a href="#" class="chiffre chiffreA4" data-chiffre="4"><span class="chiffreSpan chiffre4">4</span></a>
                    <span class="trait2"></span>

                </div>
         
               
            </div>
        
        </div>
   

    <div class="main">
        <div class="containerQuiSommesNous">


            <div class="titreQuiSommesNous">
                <h2>Qui sommes-nous ?</h2>
                <p>A PROPOS DE MOI, MON EXPÉRIENCES, MA PÊCHE…</p>
            </div>

            <!-- <div class="titreQuiSommesNousResponsive">
                <h2>Qui sommes-nous ?</h2>
                <p>A PROPOS DE MOI </p>
                 <p> MON EXPÉRIENCES, MA PÊCHE…</p>
            </div> -->

            <div class="paragrapheQuiSommesNous">
                <p>Passionné de pêche depuis de nombreuses années, je partage sur ce site mes pratiques et mes connaissances 
                    afin de permettre à tous les amoureux de la pêche de découvrir cette activité fascinante et enrichissantes.
                </p>
            </div>

            <div class="boutonQuiSommesNous">
                <a href="quisommesnous.php">
                    <button>EN SAVOIR +</button>
                </a>                
            </div>

         
        </div>

        <div class="pechesTypes" id="pechesTypes">
            <div class="image1 image">
                <a href="pechealacarpe_1.php">
                    <img src="assets/img/visu_carpe.png" alt="carpe">
                </a>
             
                <div class="presentationImage1 presentation">
                    <h3>Carpe 
                        <p>Tout sur la pêche à la carpe…</p>
                    </h3>
                   
                  
                </div>
            
            </div>

            <div class="spanMediaQuerie">
                <span></span><span></span><span></span><span></span>
            </div>
    
            <div class="image2 image">
                <a href="#pechesTypes">
                    <img src="assets/img/visu_silure.png" alt="silure">
                    <div class="presentationImage2 presentation">
                        <h3>Silure
                            <p>Tout sur la pêche au silure…</p>
                        </h3>
                    </div>
                </a>  
            </div>
    
            <div class="image3 image">
                <a href="#pechesTypes">
                    <img src="assets/img/visu_materiel.png" alt="materiel">
                </a>
              
                <div class="presentationImage3 presentation">
                    <h3>Matériel
                        <p>Cannes, PVA et sac soluble…</p>
                    </h3>
                
                </div>
            </div>
    
            <div class="image4 image">
                <a href="#pechesTypes">
                    <img src="assets/img/visu_appats.png" alt="appats">
                </a>
              
                <div class="presentationImage4 presentation">
                    <h3>Appâts 
                        <p>Additifs/Boosters…</p>
                    </h3>
                   
                </div>
            </div>

            
    
        </div>

        <div class="containerCarte">

            <div class="containerDroit">
                <img src="assets/img/visuel_fond_carte.png" alt="image carte">
                <div class="BoutonVoirGoogleMap">
                    <a href="https://www.google.fr/maps/place/Carpodrome+l'%C3%A9tang+des+brandes/@46.8113634,0.5610503,11.4z/data=!4m15!1m8!3m7!1s0x4800b18aa00b126d:0x105d39260e724a0!2sPoitou-Charentes!3b1!8m2!3d45.903552!4d-0.3091837!16zL20vMDFjNnJk!3m5!1s0x47fc555620aefac5:0x34ca47e2f65815cd!8m2!3d46.823431!4d0.647662!16s%2Fg%2F11b75ht_tl?entry=ttu" target="_blank">
                        <button>
                            VOIR LA GOOGLE MAP
                        </button>
                    </a>
                    
                </div>
            </div>

            <div class="blocDeGauche">
                <div class="carteDeFrance">
                    <img src="assets/img/Carte_france.svg" alt="">
                </div>
                
                <div class="explication">
                    <h3>partez à la découverte   </h3>
                    <p>Retrouvez les parcours de pêche de carpe et aux silure dans le département de la Vienne (86)</p>
                </div>

                <div class="logo">
                    <img src="assets/img/logo_VM_footer.svg" alt="">
                </div>

                <div class="imageLieu">
                    <img src="assets/img/visuel_carte.png" alt="etang">
                    <div class="texte">
                        <h3>ÉTANG DES BRANDES </h3>
                        <p>Un carpodrome qui se situe à proximité de Châtellerault, dans le département de la Vienne (86), en région Nouvelle-Aquitaine.<br> Ce plan d’eau est dédié à la pêche de la carpe au coup et depuis 2019 à la pêche de la carpe de nuit. Site clos de presque 6 hectares avec un étang de 3 hectares avec des profondeurs allant de 20 cm à près de 5 mètres. 
                            Des postes sont aménagés pour plus de confort avec la possibilité de s’installer de part et d’autre.</p>
                    </div>

                    <div class="divBouton">
                        <a href="https://www.facebook.com/carpodromeletangdesbrandes/" target="_blank">
                            <button>EN SAVOIR +</button>
                        </a>                        
                    </div>

                    <div class="divFleche">
                        <a href="">
                            <img src="assets/img/fleche.svg" alt="">
                        </a>                        
                    </div>
                </div>

                <!-- <div class="containerDroit">
                    <img src="assets/img/visuel_fond_carte.png" alt="image carte">
                </div> -->

                

            </div>
        </div>

        <div class="containerActualites">
            <h2>Actualités</h2>

            <div class="containerSvActualites">
                <img src="assets/img/logo_VM_actu.svg" alt="">
            </div>

            <div class="imageContainerActualites">

                
                    <div class="containerImageActualites1 containerActualitesInterieur">
                        <a href="#"><img src="assets/img/visu_antoine.png" alt="image Actualites"></a>
                        <div class="containerTexteActualites1 containerTexteActualites">
                            <p>MONTMORILLON <br>
                           <span>Antoine</span> <br>
                           <span>La parole est aux ambassadeurs !</span></p>
                        </div>
                        <div class="containerSvgActualitesGauche">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 53">
                                <g id="Groupe_4238" data-name="Groupe 4238" transform="translate(-30.635 -32.137)">
                                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="26" cy="26" r="26" transform="translate(31.135 32.637)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1"/>
                                  <path id="Tracé_16173" data-name="Tracé 16173" d="M111.179,92,104,98.461l7.179,6.461" transform="translate(-50.865 -40.363)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                </g>
                              </svg>
                            <img src="assets/img/bt_diapo_gauche.svg" alt="">
                        </div>
                        <div class="containerActualitesDate">
                            <p>14</p>
                            <p>MAI</p>
                        </div>
                        

                    </div>
         

               
                    <div class="containerImageActualites2 containerActualitesInterieur">
                        <a href="#"><img src="assets/img/visu_euromillion.png" alt="image Actualite"></a>
                        <div class="containerTexteActualites2 containerTexteActualites ">
                            <p>FRANCE <br>
                                <span>Euromillion </span> <br>
                                <span>Il dilapide ses gains en achetant le dernier bateau amorceur</span>
                            </p>
                           
                        </div>
                        <div class="containerActualitesDate">
                            <p>17</p>
                            <p>JUN</p>
                        </div>

                    </div>
              

   
                    <div class="containerImageActualites3 containerActualitesInterieur">
                        <a href="#"><img src="assets/img/visu_bouillette.png" alt="image Actualite"></a>
                        <div class="containerTexteActualites3 containerTexteActualites">
                            <p>CHAUVIGNY <br>
                                <span>mini bouillette  </span> <br>
                                <span>Une nouvelle recette</span>
                            </p>
                           
                        
                        </div>
                        <div class="containerActualitesDate">
                            <p>08 </p>
                            <p>JUL</p>
                        </div>

                    </div>
           

    
                    <div class="containerImageActualites4 containerActualitesInterieur">
                        <a href="#"><img src="assets/img/visu_instant_t.png" alt="image Actualite"></a>
                        <div class="containerTexteActualites4 containerTexteActualites">
                            <p>CHÂTELLERAULT <br>
                                <span>l’instant  </span> <br>
                                <span>Impact du changement climatique</span>
                            </p>
                    
                        </div>
                        <div class="containerSvgActualitesDroite">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 53 53">
                                <g id="Groupe_4239" data-name="Groupe 4239" transform="translate(0.5 0.5)">
                                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="26" cy="26" r="26" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1"/>
                                  <path id="Tracé_16173" data-name="Tracé 16173" d="M104,92l7.179,6.461L104,104.922" transform="translate(-81.179 -73)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                </g>
                              </svg>
                        </div>
                        <div class="containerActualitesDate">
                            <p>17 </p>
                            <p>SEP</p>
                        </div>

                       

                    </div>
               

            </div>
        </div>
  
          

        <div class="containerBlog">
            <div class="containerImageFondEcran">
                <img src="assets/img/visuel_fond_blog.png" alt="image arrière plan">
            </div>

            <div class="containerLogoSvgBlog">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="452.014" height="283.669" viewBox="0 0 452.014 283.669">
                    <defs>
                      <clipPath id="clip-path">
                        <rect id="Rectangle_1810" data-name="Rectangle 1810"  fill="none"/>
                      </clipPath>
                    </defs>
                    <g id="Groupe_9672" data-name="Groupe 9672" transform="translate(-123 -4490.959)">
                      <g id="Groupe_9671" data-name="Groupe 9671" transform="translate(123 4490.959)">
                        <g id="Groupe_9670" data-name="Groupe 9670" clip-path="url(#clip-path)">
                          <path id="Tracé_16544" data-name="Tracé 16544" d="M24.929,341.122l.327,3.729,169.691,66.606-61.278-76.091-.326-3.729Z" transform="translate(-9.606 -127.788)" fill="#fff"/>
                          <g id="Groupe_9669" data-name="Groupe 9669">
                            <g id="Groupe_9668" data-name="Groupe 9668" clip-path="url(#clip-path)">
                              <image id="Rectangle_1807" data-name="Rectangle 1807" width="170.88" height="79.908" transform="translate(14.752 203.761)" opacity="0.5" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARYAAACCCAYAAACDzeeuAAAAAXNSR0IArs4c6QAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAABFqADAAQAAAABAAAAggAAAAD0PSZRAAAak0lEQVR4Ae1dZ9ccNZO1YX8EOcMLOCeCwUswYMBgwGCiyTnncMg5mZzMMeBDOBh8bODFJMNieEkLZklLWNISlnTgV3hVcpe4rZa6a2Y00z0zNR+mJVXVrdKV6rqfBzAjV61aNUI/ykATGZg8efIZI0eOzJWGczN2l3flypX35xx1UisD/1Zrdk0+dAyQWPCmPZHgZXquItuaa67phAN9yQFFxbeRXT/1MqDCUi//fZ990qRJZ9ImsNGzudsbNj6KBTugXYqDfhjPmPqslwEVlnr5b2T2iRMnnonNWtbEKBToxxuT4KAPxSEO2mBs32g4hz6bx4AKS/POJHlFJBQICg0abGISC/ShWDN3P5Zkc4TM2THWG0cxMj9r92L8PDQv+OWcdFI7AyostR9BewVMmDCBfwRxAF5DuiZeY401ckIR82OgMrtn45CosJBDFlMQgwhWrlZOAL6lOOyvz3oZGKn/VKjeA+Ds48ePP0vaPMbPiQbEWCicox/nidm9dXZnzGA+iCmIAdhYWAir4EeL4Juzwzq5sV9UWJYvX/6QddSv2hlQYeniEZBYMDw0Sa55yA42Glc1sYVEPx8jm1filGFkNUWb2BZhvmJ+VfYszrrBuDSf8QvuiUAY46WXXnqYc+uzPgZUWFrkfty4cfhmYaOzSy1uCgriRgiMXfNY8KJvzi7BQR/IV1Uvpy8IIWDQsG0crMuM3b68da7DPtGPFtA3m69atmzZQuusX7UxMPS/Yxk7dmxOKPCiwtg1D/9TELDR5Q42RXbR3eGiHy9KcNAnwwzmA7+CGIANm7Hg59VcsAdwHDdVe/KwsY4ch6lxGE+fvWNgIN9YjFicbSisuvDMclXzVDWxxTEN5/xoARswmzs72ryx8/ExMj9r92LI1X1ifuwQs0cwS/OZGFcvxlMunKOfV4edot2LY3epnzvLpUuXPpoL1klPGegLYRkzZgwJBV5Wd4GYrcCFFDeFh415aOyaJ5IrZw/UYcMQB30gd1W9nL6wd8CgYds4WFesXvTJ8kb379sx1htHMTK/0j1leeiR81u8ePFjtKif3jNQm7CwWPCWJRcILmPuAhEG2HJigOtlfl4ddmpi3YVHHBxnmFV+BTFADBgX/LyaC3aIZQ7E3HjYHF/Yu10wX14ut2cpDsZDTFW9nL6wd8CgYRBn0aJFjzOAPnvHQDJhGT16tH2roNLxAsE4ePC8VfSDsTXj3IzdhfbWGYpjnB8toG82d3a0eWPn42NkftbuxZCr+8T82CFmj2CW5jMxrl6Mp1w4Rz+vDjtFuxfH7lK/ghhE8Ap+lAB8C3awsV+UmyfMJ1e4TrrOQOkvb41YnJNVELywcLir+JeaXDHYKg+eYoy/y5HNGYrj7dz3C/i2jIO1Al70ooIPDQt+VXbMB+Oq5nH7gpgcN1le5+fVQdMczzEcsx7FyGIKe0YsyFvws0WsroOGBTviwLjKz9oJEGJoWpjbRf3qOgMjR40a5f/+wibNDqjqQLnAKj/RwZuczo+B8aKg3Vtnd67d4UT8qpqY8Qp+ZADMgh1s7CfmxsPmeFuLwXV7sgv5Osg3Zw/UUcBBHzJm86p6LY75KvgBBg0LdswH4yoO3b4ghmulPPZjbM6PFtCX5gsXLnySnvrpDQMj6R+3cio8DBj35ODxYkDu3AVBH6o54Fd6mSGm4OdxULAHclFIlZ+1Q15O49fu/NjBy+fs3jq726exVflVnSXjFfzIALkLdrCxn60lsF6o1cPm+KBfwNftOWCzGNn6qgULFjzlFnTQVQbs71j4P1LzLoH4wPwKO8XBeMLO5lUXlcso+AEGDQt2zAfjquZx/EAM18q10Nz5eXVYH7THcNDHx8hiSvcEMQU/W4T5kuBAfQUcsOX2jOtQh01rbDluyuyIg+MsxuGgDcbuLOfPn/+0Ta5fXWXACsuUKVNif/mOOzCuAg4reoHQh+LM3OGgDcbu4CN5eLngl+FH7ZBD2jyuVg+b420u3BMn93K1jIPxkNvioC0yLvgBBg0L9hgOrnsYkrOkkJyfj+HbMZ83ruKwdE+Q1+EQ/n333beYbPrpHgP2l7f+f/1K6cwB5A6DS+jmwSO2l6/0AkFclV9wT9l+OWVu77wIOXJ2b53d7dPYgvkgpiCUYKM8jFfwI0OZHWzsV8qNgcvlCMTbWsy625NdyNeR44bsEhz0gZjSeiHG1QNrmLeAQzn0010G7BvL1KlTT6M03sEEDwz8CgfmxXPlBT/AoGHBHsPBdQ8jd6HRD8dZjNuXj+HbMdYbRzEyv9I9Qd6CH9noI8GBmgo4YItyA3k4Z25fZXYP38bzl7E5nIhfTsQCeRgqBU6QmzvuuGMJJ9FnegassEybNu1UgoZLID54iHHVwZoEJ3jwDqzP/yQFLuyWYF66b/SDsY8RFY1AjGtSAimzo80bRzEyv9I9QV6Hg/i+HW2RcWk+E1OaZ968eUspp37SM2CFhWB33nnnU+iZHWDhwMhGn5i9Gwe/OqPN6S4IrPGwreaK1YvrlADnMC4IpudbsEMsYxY4Rp8Mz+0bbd7Y+VAMfcrsnm11wOoYh4M+gFdaL8QEcXw7zP16uaYqDqvyBHEwLznccsstz7CjPtMx4ISFIadPn34SjfEAIuMkB2+w3QXx82ZzZ4/UQbU6Hx8DYnL1wjqF8H4tjm8rs6MvjAs4YMvVi+uQh4Y5P7uweo2HOTvi4JiczdzxgzYY57jJYjAPj1PglHKT5a7KQ26lOLjnDJMe9gP7ttzccMMNz7FNn2kYKPybtytWrFjA0DNmzDiRxngQ2bzy4P2D9XF8O+bwxsFcgFd1wciVPgU/WoRcBTvYcn647mHYi0pr9EE/HGc2ty/f17djrDeOYoBfTjRgndJwjQ6nzI62yLiKw6o8tibzlQTH1OjyMTA9sXZc13E6BgpvLDHomTNnnsC20IHhYaEd1yke5zE/8Mk1RSCeSyr4eb4FO+Tgmkovc4bnLmog3taCe+LiPF+H4dXIdRRwMB5iSuuFGJcP1jCXGAfjoY7Sev0Y45w7C99u5lX1Uu3OxyaHLx8PTLmhj3Hdddf9M+egk44YEAsLZ5k1a9ZxPMZD9Ma5g/dsHF51wcivcOk5OMMs2GO5KC5iy11U9AnE5PZVZpfioB+Mc9wE8tASfVw9EIv7lOCUckhJDHZVHldLpI4cRoZJD/vxYlwutvMT/XjNf2Ktvg3nIaxrr71WxQVJ6mDcsrBgrtmzZx+L8+ywSi8qHGjBj7DK7GDL+eG6h5G70OiH4ywmd6HL7GjzxlEM8Ms1O6xTGbwvh1NmR1tkXODY86vKY2syX0lwTG6Xj4HpiTXhuj+OxQf8/KXCPIZ1zTXXPF9w1oWWGehIWDjbnDlzjqExXJBc87BfmR1sjFN6mbN87qIG4m1as+58AnVQrpxdgoM+WR30KK0XYlw+WOM9t4SD8VAHDXP7Qj8cW0dTN67hWIpjYtyeMkz38PGcwRuUYbBrSizCjOFdffXVKi5MepvPwi9v28FZsmTJoxx36KGHHoUHFhlXNaG7qBhPOXBuxs6P88fsuF6Gg34wzjVfIJ7Tu3ogFmuW4JRyk+WuykNupTimPoeRYdLDfrzac37sQ0/0w3Uc+3nQhmMJFvlL8FJiYY06ljOQ5I0llG7u3LlH8joeNF4Mb53d7RP9aAF9s7m78Gjzxs7HxwC/XLPDOoVw3ioca8fYyLjKz+XBeKjD1mS+kuCYHC4fAwdyoSk3jsXnnMzE34tvp3lKrBR4V1555bJQnbomY6BrwoLpjznmmLk8D10gvHi+3bMxTO4iog85ZPOq5mMs11yIA2MxDsRYbJybcVUeV48Xx+uMWYmDuXLBZoLYvg3nZRjslxKLMFPipcC64oorXuC96rM1BnoiLFzS8ccffziP/YPHuRlXNU/uLYMwvXhOkwLHYkTwbR5BveRXioMY5BzL5/uRL38whtf8Z1k8+kqwyF+ClxIry4mlRscparv88stVXKIMxw09FRYs46STTjoMLxyMc6IB6zY8mzvBoEX0QXtgHTFoLG52xKJAb54Ex2Dm9kV56OPlWr0Y+I7F+64SvJRYlD8lXkosSW2XXXbZiz6HOi9noDZh4bJOO+20Q2kMl901F6wV7BFbzg99vBy5i45+OM5qrBK6qnpzuTJM9wjkczYcGD+XB9dxnBKLcFPipcSS1ibhTIp16aWXqrgQWcJPkn8qJMwVdHvggQfc3+h15plnHuxfQJxnY9tggXWHb2yuCUv8SnEQg4BjOL6fK8KLwXUcl8V7fjiNjlPipcSigiV4xie6NzRIsLKcGBYdS/GiAGrIMVD7G0uuGpice+65c2iKFw0PH9d9PzMXi0YZDuajHPzxY3jdf8biA37+UmGeEovAU+KlxKqrNibc7IWHhecll1zyUmFRF4IMNFZYuNoLL7zwIB5nT/3RxCPEn0oavayBEE+CRf4SvJRYWU73Zoo1h8aC+gp/GIVwLr744pdD67qWZ6DxwoLlmj8xZvMcL4o3jl429GMc/2l8ovHoK8Ei/5R4KbGktdWxT2lt5EcfQY0i0RBijbjoootUXCzz8a++Ehbehvkt/QE8pqfgYln3lI2ZEivbQzJBG4Ta7IHJzjb3BstxoafgnogFyLxJvxLKoWurGehLYcHDM/+egRUZSTMJLpaFlmCRY0q8lFjS2urYpyVYxp24yYX7TSpAF1xwwXLeiz6LDPS9sPCWzL+CvT+Py54pmyklFtUswTM+ZdtzNglWltPFlA2keEJMsWgI95tUNIR7GHH++eeruEQuzcAIC+7vqquu2g/nOBZeVFGTE64ET9qUEqwsZ89/bGIOBTXW0uTCs0he23nnnfcqc6PPvxkYSGHh7Zn//D0oMJJGFzSQTSPBIkcJXkqsLKdIgIT1id8ypHgSTqRYQj9yk5xFSwJ0zjnnqLhYZv/+Gmhh+XubI0aYv8BnFs9buNCVjZkSi+pLjSfEFIuGsL6WGpPPJfJMWZsYq1Xezj777Nci9Q/l8tAIC5+u+esHZ5nmqBQM4cWysCnxpFi8H0Gj19LkQv5qqU3AGZXfUm1nnXWWCgtfSvMcOmGBvY+4/vrr98V5YCy6XMKLSm8jIkGjOgSYyf/0FeS0FAn8hrI285+k/EfgDg3l0lALC564+X/L7INzHguayLoav1pEQ1ifSCBpIwI8sWikxOqX2s444wwVF7pHq1aJ+4HOduA/N954Y05gWhEMIkfSTAIfy7PAT9zkTa5NsE8qv2/E8fTTT3/dHuAQf6mwlBz+TTfdNJPNgsufvMkptyCvxCd5bZK6hPUPZG3mrwMZanFRYWHlKHnefPPNewubRNLkBNU3f/qW0CLZq1g0BEIlxhKeVVfP4NRTT11Rxt2g21RYWjzhW2+91YpMJKyvLn9kDxLBoNCuNmYHtSU/A6pFIHwFn1NOOWVoxUWFJXaDK9bnzZu3V8xFcAmTX35BTluuwE9rCxxsu7ydfPLJbwTgBn5JhSXBEd92220oMuLGbPeyxkpOiZcSi+qV4Al87NYFfuIz6EVt5u93HjpxUWGxVzXN1+23374nI6W8/AIsSqs/mjD52VPAW88E6MQTT3zTK2+gpyosXTreO++8c4YEukmX3693WGoT7JOo6Ui4TzjhBBUW/4LpvH0G7rrrrqtN9PsRBPGfmILLL8aiWiR4Ah+7LYGf1maYMv9frX9ZwobgS99YenjId9999x6hdCkbMyUW1ZoSLyWWtDZBTnskAr8k4njcccf9yyYc8C8VlpoO+J577mGR6egV2ys/yeUHzFpqEzQ5ldjU2irP4Nhjj30LOB7IoQpLzcd677337k4lCJqplkbS2nIXpFI02LvqPM3/z3ygxUWFhW9CA57333//blVlVF1YE5/s8reCRXX3e22C+mmbSfZ59NFHv23BBvRLhaWBB2v+75AxganlrUXYcE2tTSy0dBUEexXjVWEdddRRAysuKiwNFBYsaf78+dNxTuOqC2tcamnyJtcm4IzKT8kb4dFZWSGyk8DXkUce+U5gue+XVFj65AgffPBBEhjxn5a0LUEzifFSYklrE+QkqKT7FOJVCoYtTFbbiLlz5w6cuKiw8A3oo+eCBQt2FZSb8k/fRgsQcSERIYlPhlX6lsHcS/CMjwjriCOOeJdxB+GpwtLHp/jQQw/tUlW+4PI3VYBoaylrs1RJGl3AmRiLHCV4hx9+uAqLZVW/GsXAww8/7IuM+C2DNiK4/CmbPHVtSX80yfgQvWkIeBPXdthhh73XqEvVQTH6xtIBeU0NfeSRR3bm2gQXP3WTi/EEtdltGL+eN3ldtR1yyCH/yWfXz08Vln4+vYraFy5cuBO5SJpE4mOgUr612OoloiGsTfxmkBIvJRaf1cEHH9z34qLCYq/34H89+uijVmQiOxW/ZfDlj+C4ZYlgSLEyv75+a2lVgObMmRP7D1cdx00eqLA0+XS6UNtjjz327zHYVi9/DIfXJXgqQMzW30/m7aCDDupbcVFh+fs8h270+OOPF0RG0uh88asIk2ARRkq8lFgt1Cb6EbHV2g488MAPqjhuql2Fpakn08O6nnjiiWmcrtXLz3GxpwTP+CT7MYfqkOBJ6pJiZX70qPy0Wtvs2bP7UlxUWCqvwnA5PPnkkztKdlxHY0qakmoftNoOOOCAlZIzaZKPCkuTTqNBtSxatKhSYCSNXkeTE41NrU1SV1Z/7jbsv//+fSUuKiy549NJiIGnnnpqh9B6StFIiUW1psRLidVJbfvtt9+HoXNo4poKSxNPpaE1Pf300zmBMQ3X89+NEDWSRq+jNkldWf1t8TZr1iwVlob2hpaViIHFixdPzZpEhChp9G43ZqhQSV2p9ynFC9W27777/ldoH01b0zeWpp1IH9azZMmS7avKTikaKbGo7pR4KbFite2zzz6NFxcVlqqOULuYgaVLl0YFxjRcW6//seQSvF40eai+XtQ2c+bMj0K5m7KmwtKUkxiwOp555pnt/C1JGl3SlIQrwcr8kgla02rbe++9GysuKiz+7dd5UgaeffZZJzB1NOYgC9Bee+31cdLDSgimwpKQTIUqZ+C5557bVtLowyJAxJZkr2Wc7bnnno0UFxWW8l5QaxcYeP7557epgi1rJo6VNCX5SrAyv778sWnGjBmfMCdNeaqwNOUkhrSOZcuWBUUmpWikxKJjSomXCmuPPfZolLiosAxpQzdt2y+88MIUrMk0HE6j41SNyQkkeE2tbffdd/+U91H3U4Wl7hPQ/AUGXnzxRSsykianYEmjp8TKclb+2CSpS4ol2eduu+2mwkJE6UcZKGPg5ZdfnlxmZ1tK0UiJRfWlxJNgTZ8+/TPmpc6nvrHUyb7mFjPwyiuvTIo5m4aLmXLrksakgJR4KbGkte266661i4sKS+7q6aQfGFi+fHlBZCSiUUeTZ2LQ8x+bdtlll/+u8yxVWOpkX3N3xMCrr746kQHqEA2JmFF9ddW20047fc789PqpwtJrxjVfVxh47bXXJkoava4ml2w6dW0qLBLW1UcZEDDw+uuvT6hya6oAUd2pa5s2bdoXVXx0w65vLN1gVTEbwcCKFSvGhwpJ/WYgwZMIBtUqwcr8xL+32XHHHXsuLiosoZunawPFwBtvvJETmDqaPBODSl67VdsOO+zwZWXyhA4qLAnJVKjmM/Dmm2+Ooyq78WZQtfuUotEO1tSpU3smLiosVbdB7QPJwFtvvTVWsrF+FyDaI4vQ9ttv/5Vkzyl8VFhSsKgYfc3A22+/HRUZbsqqDaYUIMolwWuntu22264n4qLCUnVj1D5UDLzzzjtj/A13q8n9PDhvRzQwHsc+1rbbbvs/aO/GWIWlG6wqZt8z8O677zqB8RsztjmJAFGsBC8lVpYzV/Y222zTVXFRYcnRrRNloMjAe++9N1rS6BLBIHQJVuYn/kfKxarzK6HapkyZ8nXeK91MhSUdl4o04Ay8//77o6q2KBGNUJOHcCVYFNcu3uTJk1VYQsTrmjJQFwMffPBBUGTabfLYPiR4nQjQpEmTvonl7mRd31g6YU9jh56BlStXbo0kdNLkiMPjlHgxrIkTJyYXFxUWPkF9KgMdMvDhhx9akTENXPm7EUoVa3QsIyVWljNY24QJE77FvJ2OVVg6ZVDjlQGPgY8++mgrbyk4TSkaKbDGjx+fTFxUWIJHrovKQBoGPv744y1jSJI3FopNIRpYQxneuHHjvkPfdscqLO0yp3HKQAsMfPLJJ0GBKWtyhJeIUAqssWPHqrAg8TpWBvqFgU8//fQfXKtEMMg3hWhAzuDvWdg+ZsyY73nc7lPfWNplTuOUgQQMfPbZZ/+QiEavBWj06NEdiYsKS4LLoRDKQKcMfP7551tUYfRagEaNGvW/VTXF7CosMWZ0XRmoiYEvvvhi81DqXr+1UA1bb711W+KiwhI6QV1TBhrAwJdffukLzCqJuEh8aHuSN6Ctttrqh3aoUGFphzWNUQZ6zMBXX321GaVMKRpSrC233LJlcVFh6fEF0XTKQCcMfP3115tK4qWiIXlrIawtttjiR0le9lFhYSb0qQz0GQPffPNNVGQkgkHbbUWANt9885+kFKmwSJlSP2WgoQx8++23m4RKa0U0QvG4xlibbbaZSFxUWJA9HSsDfc7Ad99950SmG28tm2666c8SilRYJCypjzLQZwx8//33G1PJ/KZRVn6rArTJJpv8XIZHNhWWKobUrgz0OQM//PDDRlVbaFWANt544/8rw1RhKWNHbcrAgDHw448/bhTaUqtvLYSx0UYbRcVFhSXEsq4pAwPOwE8//bShv8VW31oofsMNN/zFx6G5CkuIFV1TBoaIgZ9//tmKTDtvLRtssIEKyxDdFd2qMtAyA7/88ssGkiBfgNZff/1f/Th9Y/EZ0bkyoAyM+PXXX9eP0RD6kWm99dbLiYsKS4w9XVcGlIERv/32W1Bg/LcWomrdddf9jSlTYWEm9KkMKAOlDPz+++/rsUPorYVs66yzjhUXFRZmSp/KgDIgYuCPP/6wAhN6a1l77bV/JxAVFhGV6qQMKAMhBv788891/fW11lrrdxUWnxWdKwPKQMsM/PXXX+tg0P8DVkwCIAG5h60AAAAASUVORK5CYII=" style="mix-blend-mode: darken;isolation: isolate"/>
                            </g>
                          </g>
                          <rect id="Rectangle_1809" data-name="Rectangle 1809" width="438.031" height="179.566" transform="translate(0 38.178) rotate(-5)" fill="#fff"/>
                        </g>
                      </g>
                      <path id="Tracé_16545" data-name="Tracé 16545" d="M46.8,67.557,0,40.525v40.54L23.4,94.573V67.557l11.7,6.754v27.016l11.7,6.754,11.7-6.754V74.311l11.7-6.754V94.573L93.6,81.065V40.525ZM93.6,0,46.8,27.016,0,0V27.016L46.8,54.049,93.6,27.016Z" transform="matrix(0.996, -0.087, 0.087, 0.996, 431.251, 4541.124)" fill="#fd7e23"/>
                      <text id="Blog" transform="matrix(0.995, -0.105, 0.105, 0.995, 172.681, 4650.531)" fill="#ff7e1f" font-size="117" font-family="Asap-Bold, Asap" font-weight="700"><tspan x="0" y="0">Blog</tspan></text>
                    </g>
                  </svg>
            </div>

            <div class="containerBoutonBlog">
                <button>C’EST PAR ICI !</button>
            </div>

            <div class="containerExplication">
                <h1>Vos avantages</h1>
                <p>Accès au blog et interactions avec les internautes </p>
                <p>VIP sur certains Channel </p>
                <p>Différents grades pour le blog </p>
                <p> (débutant, confirmé, expert, compétiteur, modérateur, admin, fondateur)</p>
            </div>
           
        </div>

        <!-- <div class="containerSponsor">
            <div class="containerToutesLesSvg">

                <svg class="logoSponsor logo1Sponsor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 53 53">
                    <g id="Groupe_4297" data-name="Groupe 4297" transform="translate(-54.5 -3447.5)">
                    <g id="Groupe_4238" data-name="Groupe 4238" transform="translate(23.865 3415.363)">
                        <circle id="Ellipse_2" data-name="Ellipse 2" cx="26" cy="26" r="26" transform="translate(31.135 32.637)" fill="none" stroke="#4d4d4d" stroke-miterlimit="10" stroke-width="1"/>
                        <path id="Tracé_16173" data-name="Tracé 16173" d="M111.179,92,104,98.461l7.179,6.461" transform="translate(-50.865 -40.363)" fill="none" stroke="#4d4d4d" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                    </g>
                    </g>
                </svg>
    
                <img class="logoSponsor logo2SponsorPeche" src="assets/img/logo_peche_86.png" alt="logo">
    
                <img class="logoSponsor logo3SponsorDecathlon" src="assets/img/logo_decathlon.svg" alt="logo">
    
                <svg class="logoSponsor logo4Mitchell" id="Groupe_9677" data-name="Groupe 9677" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 158.004 59.381">
                    <g id="Groupe_9679" data-name="Groupe 9679">
                      <path id="Tracé_16549" data-name="Tracé 16549" d="M9.272,0a12.091,12.091,0,0,1,3.344.405,9.489,9.489,0,0,1,2.229.937q.836.532,1.52,1.064a4.106,4.106,0,0,0,.785.557,3.132,3.132,0,0,0,.836-.583,13.805,13.805,0,0,1,1.419-1.064A7.883,7.883,0,0,1,21.356.431,8.472,8.472,0,0,1,24.143,0a8.255,8.255,0,0,1,3.724.836,9.651,9.651,0,0,1,3.065,2.229,10.391,10.391,0,0,1,2,3.243,11.243,11.243,0,0,1,.709,3.927V36.1L25.612,36V10.108a1.9,1.9,0,0,0-.709-1.52,2.491,2.491,0,0,0-1.7-.608,2.427,2.427,0,0,0-1.672.608,1.973,1.973,0,0,0-.709,1.52V36.151H12.793V10.26a1.9,1.9,0,0,0-.709-1.52,2.537,2.537,0,0,0-1.7-.608,2.416,2.416,0,0,0-1.7.608,1.973,1.973,0,0,0-.709,1.52V36.3H0V10.285a10.24,10.24,0,0,1,1.267-4.94A10.515,10.515,0,0,1,4.661,1.6,9.339,9.339,0,0,1,9.272,0" fill="#adadad"/>
                      <path id="Tracé_16550" data-name="Tracé 16550" d="M143.2,22.451h7.651V45.783H143.2Zm.228-5.9a3.4,3.4,0,0,1,1.14-2.635,3.84,3.84,0,0,1,2.66-1.013,3.578,3.578,0,0,1,2.584,1.115,3.836,3.836,0,0,1,1.039,2.685,3.346,3.346,0,0,1-1.14,2.533,3.7,3.7,0,0,1-2.609,1.039,3.47,3.47,0,0,1-2.584-1.115,3.462,3.462,0,0,1-1.089-2.609" transform="translate(-106.923 -9.632)" fill="#adadad"/>
                      <path id="Tracé_16551" data-name="Tracé 16551" d="M184.8,20.34V.2h7.6V13.12h3.091v7.22h-1.875a1.276,1.276,0,0,0-1.165.76,4.218,4.218,0,0,0-.405,1.9,7.707,7.707,0,0,0,.532,2.736A3.847,3.847,0,0,0,194,27.687q.3.152.836.456t.684.38v7.625a17.586,17.586,0,0,1-1.824-.405,17.114,17.114,0,0,1-3.116-1.267,11.624,11.624,0,0,1-3.243-2.407,7.517,7.517,0,0,1-1.723-3.42,20.883,20.883,0,0,1-.684-4.155c-.076-1.368-.127-2.761-.127-4.155" transform="translate(-137.984 -0.149)" fill="#adadad"/>
                      <path id="Tracé_16552" data-name="Tracé 16552" d="M254.181,73.8a20.833,20.833,0,0,1-2.128.38,20.062,20.062,0,0,1-2.153.127,10.858,10.858,0,0,1-8.233-3.319,12.164,12.164,0,0,1-3.167-8.715,10.9,10.9,0,0,1,3.344-8.284,12.031,12.031,0,0,1,8.664-3.192,14.782,14.782,0,0,1,1.849.127,10.871,10.871,0,0,1,1.8.405v7.473c-.735-.177-1.343-.329-1.849-.405a9.467,9.467,0,0,0-1.343-.127,5.026,5.026,0,0,0-3.521,1.115,4.374,4.374,0,0,0,.076,6.181,5.028,5.028,0,0,0,3.5,1.165q.608,0,1.368-.076c.507-.076,1.089-.152,1.8-.253Z" transform="translate(-178.08 -37.931)" fill="#adadad"/>
                      <path id="Tracé_16553" data-name="Tracé 16553" d="M312.3,36.224V.2h7.575V12.816c0,.405.228.608.709.608a7.811,7.811,0,0,0,1.191-.152,8.112,8.112,0,0,1,.988-.177,6.691,6.691,0,0,1,1.165-.051,11.173,11.173,0,0,1,3.395.532,10.094,10.094,0,0,1,3.192,1.647,11.142,11.142,0,0,1,3.395,3.825A10.7,10.7,0,0,1,335,24.064V36.275h-7.473V23.405a2.624,2.624,0,0,0-1.241-2.28,4.682,4.682,0,0,0-2.787-.887,4.107,4.107,0,0,0-2.609.937,2.843,2.843,0,0,0-1.089,2.305V36.224Z" transform="translate(-233.184 -0.149)" fill="#adadad"/>
                      <path id="Tracé_16554" data-name="Tracé 16554" d="M422.652,73.281c0,.152-.253.2-.811.2a8.894,8.894,0,0,1-3.9-.912,12.03,12.03,0,0,1-5.877-6.156,11.221,11.221,0,0,1-.963-4.332,12.437,12.437,0,0,1,1.52-6,11.4,11.4,0,0,1,4.155-4.408A10.992,10.992,0,0,1,422.5,50a11.962,11.962,0,0,1,5.8,1.469,11.734,11.734,0,0,1,4.307,4.1,11.615,11.615,0,0,1,1.773,5.725,16.815,16.815,0,0,1-.2,2.407c-.127.887-.228,1.545-.329,2H422.931V60.589h2.787c.228,0,.355-.1.355-.3a2.014,2.014,0,0,0-.405-1.039,3.348,3.348,0,0,0-.861-.912,3.739,3.739,0,0,0-2.052-.583,4.134,4.134,0,0,0-2.229.633,3.479,3.479,0,0,0-1.419,1.723,3.981,3.981,0,0,0,.861,4.256,3.8,3.8,0,0,0,1.545,1.14,4.989,4.989,0,0,0,1.14.253Z" transform="translate(-306.955 -37.333)" fill="#adadad"/>
                      <path id="Tracé_16555" data-name="Tracé 16555" d="M525.271,36.825a23.149,23.149,0,0,1-3.5-.355,12.1,12.1,0,0,1-4.332-1.52,11.1,11.1,0,0,1-2.432-1.976,10.329,10.329,0,0,1-1.7-2.609,13.152,13.152,0,0,1-.811-2.255,9.512,9.512,0,0,1-.2-2.255V.7h7.727V24.133a12.723,12.723,0,0,0,.1,1.9,4.434,4.434,0,0,0,.456,1.343,3.458,3.458,0,0,0,2.255,1.647,9.781,9.781,0,0,0,2.407.405v7.4Z" transform="translate(-382.517 -0.523)" fill="#adadad"/>
                      <path id="Tracé_16556" data-name="Tracé 16556" d="M585.371,36.825a22.856,22.856,0,0,1-3.5-.355,12.1,12.1,0,0,1-4.332-1.52,12.455,12.455,0,0,1-2.432-1.976,9.645,9.645,0,0,1-1.672-2.609,11.279,11.279,0,0,1-.811-2.255,9.363,9.363,0,0,1-.228-2.255V.7h7.727V24.133a12.186,12.186,0,0,0,.127,1.9,4.434,4.434,0,0,0,.456,1.343,3.448,3.448,0,0,0,2.28,1.647,9.6,9.6,0,0,0,2.407.405v7.4Z" transform="translate(-427.392 -0.523)" fill="#adadad"/>
                      <path id="Tracé_16557" data-name="Tracé 16557" d="M128.271,179.313a2.856,2.856,0,0,1,.811-1.8,8.285,8.285,0,0,1,2.609-1.723,16.686,16.686,0,0,1,4.433-1.191c.481-.051.76-.1.887-.1a2.08,2.08,0,0,1,1.343.431,2.786,2.786,0,0,1,.785,1.419,3.328,3.328,0,0,1-1.317,1.343,4.812,4.812,0,0,1-2.255.659,2.1,2.1,0,0,0-.279-.329.622.622,0,0,1-.228-.38c0-.177.152-.405.481-.633-.431.076-.912.2-1.419.329a14.124,14.124,0,0,0-1.469.456,4.726,4.726,0,0,0-1.216.684,1.461,1.461,0,0,0-.583.963c.076.2.405.355,1.013.507.608.127,1.292.279,2.1.481a6.054,6.054,0,0,1,1.723.633,2.7,2.7,0,0,1,1.419,2.179A5.445,5.445,0,0,1,136,185.9a6.736,6.736,0,0,1-2,1.748,14.653,14.653,0,0,1-3.116,1.444,9.97,9.97,0,0,1-3.091.583,3.479,3.479,0,0,1-1.723-.355,1.945,1.945,0,0,1-1.267-1.773,2.672,2.672,0,0,1,.456-1.419,4.212,4.212,0,0,1,1.241-1.267,4.339,4.339,0,0,1,1.672-.76.878.878,0,0,1,.355.3,1.951,1.951,0,0,1,.177.481,3.327,3.327,0,0,0-1.089.785,2.539,2.539,0,0,0-.583,1.165c.1.177.329.253.735.253a10.632,10.632,0,0,0,3.243-.735,8.122,8.122,0,0,0,1.571-.633,3.672,3.672,0,0,0,1.165-.988,2.588,2.588,0,0,0,.557-1.393c-.051-.2-.355-.405-.937-.583-.608-.152-1.343-.38-2.2-.633a6.265,6.265,0,0,1-2.1-1.039,2.2,2.2,0,0,1-.785-1.773" transform="translate(-93.184 -130.293)" fill="#adadad"/>
                      <path id="Tracé_16558" data-name="Tracé 16558" d="M177.229,186.023a12.967,12.967,0,0,0-.481,1.216c-.1.279-.253.659-.431,1.115s-.355.912-.557,1.368-.355.861-.507,1.191a1.14,1.14,0,0,1-.2.051,1.2,1.2,0,0,1-.608-.253,3.634,3.634,0,0,1-.557-.481c-.532-.253-.785-.557-.785-.887.583-1.216,1.292-2.635,2.2-4.332.3-.583.659-1.216,1.039-1.9s.684-1.216.912-1.571a2.837,2.837,0,0,1,.456-.608.481.481,0,0,1,.228-.076.876.876,0,0,1,.3.076c.127.051.228.076.3.1a.763.763,0,0,0,.355-.1,1.271,1.271,0,0,1,.355-.076.318.318,0,0,1,.279.152c-.1.228-.3.633-.583,1.241s-.583,1.267-.937,2.027c-.355.811-.608,1.368-.785,1.748m1.621-6.46a1.581,1.581,0,0,1-.279-.937,2.081,2.081,0,0,1,.329-1.165,1.717,1.717,0,0,1,.861-.735l.329-.025a.87.87,0,0,1,.861.937,1.976,1.976,0,0,1-.279.912,2.98,2.98,0,0,1-.659.811,1.287,1.287,0,0,1-.785.329,2.23,2.23,0,0,1-.38-.127" transform="translate(-129.248 -131.936)" fill="#adadad"/>
                      <path id="Tracé_16559" data-name="Tracé 16559" d="M196.916,200.865a.435.435,0,0,1-.405-.2.667.667,0,0,0-.355-.253,1.078,1.078,0,0,0-.431-.1c-.177,0-.3-.025-.355-.1a.28.28,0,0,1-.127-.253,4.605,4.605,0,0,1,.431-1.571c.253-.633.659-1.495,1.216-2.609.532-1.089.912-1.849,1.14-2.305a4.562,4.562,0,0,0,.431-1.191,3.814,3.814,0,0,0-1.216.583,11.049,11.049,0,0,0-1.165,1.039,13.334,13.334,0,0,0-.912,1.039c-.228.3-.532.659-.887,1.115-.127.355-.431.937-.861,1.849-.431.887-.988,1.925-1.672,3.091a.866.866,0,0,1-.431-.076,1.344,1.344,0,0,1-.228-.279.88.88,0,0,0-.177-.279.857.857,0,0,0-.405-.177,2.948,2.948,0,0,1-.38-.152A.367.367,0,0,1,190,199.7c.076-.152.253-.532.557-1.191q.456-.95.836-1.748c.253-.532.532-1.064.785-1.621.279-.557.507-1.013.709-1.343.684-1.469,1.14-2.381,1.292-2.736.177-.355.3-.583.405-.76a.22.22,0,0,1,.177-.1.56.56,0,0,1,.38.2c.177.152.279.2.329.2a2.974,2.974,0,0,0,.405-.1,1.035,1.035,0,0,1,.405-.1.267.267,0,0,1,.253.1,2.358,2.358,0,0,1-.228.608,8.865,8.865,0,0,1-.456.785q.3-.19.684-.456l.76-.456a4.755,4.755,0,0,1,.76-.3,2.487,2.487,0,0,1,.735-.127,1.972,1.972,0,0,1,1.165.405,1.715,1.715,0,0,1,.659,1.444,10.486,10.486,0,0,1-1.545,4.256c-.431.76-.735,1.368-.963,1.849s-.405.861-.557,1.191c-.177.329-.355.709-.633,1.165" transform="translate(-141.867 -142.016)" fill="#adadad"/>
                      <path id="Tracé_16560" data-name="Tracé 16560" d="M230.379,198.373a2.285,2.285,0,0,1-.279-1.267,6.146,6.146,0,0,1,.405-2.1,8.944,8.944,0,0,1,1.267-2.356A9.439,9.439,0,0,1,234,190.52a9.561,9.561,0,0,1,3.217-1.419,2.153,2.153,0,0,1,.557-.1,2.2,2.2,0,0,1,.988.253c.3.177.481.329.532.532a.467.467,0,0,1,.3-.127,1.1,1.1,0,0,1,.709.3,2.442,2.442,0,0,1,.532.633c0,.177-.2.481-.608.937a15.875,15.875,0,0,1-1.343,1.267,2.353,2.353,0,0,1-.963.608c.025,0-.025,0-.177-.051-.127-.025-.228-.051-.253-.051l-.253-.532a1.839,1.839,0,0,1-.355-.152.437.437,0,0,1-.2-.355c.1-.177.2-.38.3-.557.1-.152.228-.355.38-.557a6.349,6.349,0,0,1,.583-.633,5.068,5.068,0,0,0-2.457,1.444,12.552,12.552,0,0,0-2.229,2.888,5.649,5.649,0,0,0-.912,2.584.926.926,0,0,0,.253.735,1.516,1.516,0,0,0,.887.253,3.553,3.553,0,0,0,2.153-.887,5.626,5.626,0,0,0,1.672-2.077.613.613,0,0,1,.1.329.9.9,0,0,1-.025.152,1.1,1.1,0,0,0-.025.127.276.276,0,0,0-.025.127c0,.025.051.1.1.279a1.134,1.134,0,0,1,.1.507,4.155,4.155,0,0,1-.887,1.6,4.715,4.715,0,0,1-1.495,1.115,4.393,4.393,0,0,1-1.748.405,3.45,3.45,0,0,1-3.04-1.723" transform="translate(-171.808 -141.12)" fill="#adadad"/>
                      <path id="Tracé_16561" data-name="Tracé 16561" d="M264.455,200.6a2.866,2.866,0,0,1-.355-1.469,6.68,6.68,0,0,1,.557-2.559,9.913,9.913,0,0,1,1.6-2.584,8.5,8.5,0,0,1,2.508-2,6.917,6.917,0,0,1,3.192-.785,2.2,2.2,0,0,1,1.571.735,2.316,2.316,0,0,1,.583,1.571,2.656,2.656,0,0,1-.38,1.368,5.04,5.04,0,0,1-2.052,1.723,11.434,11.434,0,0,1-2.432.988,9.793,9.793,0,0,1-2.761.532,3.932,3.932,0,0,0-.177.887.848.848,0,0,0,.557.785,2.543,2.543,0,0,0,.735.1,5.126,5.126,0,0,0,2.28-.608,4.065,4.065,0,0,0,1.824-1.748c.076.051.1.253.1.659a1.1,1.1,0,0,0,.253.253c.152.127.228.228.228.279a3.416,3.416,0,0,1-1.089,1.6,6.315,6.315,0,0,1-1.976,1.14,6.529,6.529,0,0,1-2.2.431,2.466,2.466,0,0,1-2.559-1.292m7.6-7.068a.977.977,0,0,0-.785-.253,3.1,3.1,0,0,0-.887.152,7.138,7.138,0,0,0-1.849,1.013,6.6,6.6,0,0,0-1.419,1.647l1.368-.3c.684-.2,1.191-.329,1.495-.405a7.137,7.137,0,0,0,1.6-.811c.38-.279.583-.532.583-.785a.552.552,0,0,0-.1-.253" transform="translate(-197.195 -142.763)" fill="#adadad"/>
                      <path id="Tracé_16562" data-name="Tracé 16562" d="M323.555,188.575a1.7,1.7,0,0,1-.785-.228.73.73,0,0,1-.253-.431.852.852,0,0,0-.228-.405,1.137,1.137,0,0,0-.431-.2,2.208,2.208,0,0,1-.431-.228.58.58,0,0,1-.127-.456c.279-.532.583-1.089.887-1.621.279-.532.583-1.064.861-1.621a2.245,2.245,0,0,1-.228.431c.253-.456.633-1.089,1.089-1.875s1.216-2.077,2.28-3.876,1.976-3.319,2.685-4.56a.715.715,0,0,1,.38-.1.817.817,0,0,1,.456.152,1.042,1.042,0,0,0,.3.177,2.389,2.389,0,0,0,.405-.076,2.23,2.23,0,0,1,.507-.1.32.32,0,0,1,.355.228c-.861,1.7-1.748,3.369-2.66,5.067-.937,1.7-1.6,2.913-2.027,3.648-.152.3-.456.887-.887,1.748s-.861,1.672-1.241,2.483c-.456.861-.735,1.444-.912,1.849" transform="translate(-239.904 -129.472)" fill="#adadad"/>
                      <path id="Tracé_16563" data-name="Tracé 16563" d="M354.251,178.932c-.025-.2-.051-.38-.051-.481a4.868,4.868,0,0,1,.532-2.1,6.478,6.478,0,0,1,1.7-2.1,7.17,7.17,0,0,1,2.761-1.444,2.272,2.272,0,0,1,.785-.1,3.618,3.618,0,0,1,1.8.481,4.171,4.171,0,0,1,1.419,1.317,3.118,3.118,0,0,1,.557,1.773c0,.076-.025.228-.051.456a10.443,10.443,0,0,1-.887,2.888,12.068,12.068,0,0,1-1.444,2.229c-.557.659-1.267,1.444-2.179,2.381-.2.253-.507.583-.887,1.013-.38.405-.76.811-1.115,1.191a8.553,8.553,0,0,1-1.165,1.013,2.612,2.612,0,0,1-1.013.532,4,4,0,0,0-.355-.507c-.076-.1-.152-.228-.228-.355a2.443,2.443,0,0,1-.228-.507l5.219-5.523a15.355,15.355,0,0,1-2.533.3,3.231,3.231,0,0,1-1.267-.228,1.829,1.829,0,0,1-.861-.785,3.683,3.683,0,0,1-.507-1.444m5.4-4.357a4.454,4.454,0,0,0-2.027,1.292,9.128,9.128,0,0,0-1.343,2.457,1,1,0,0,0,.431.861,2.042,2.042,0,0,0,1.089.279,4.213,4.213,0,0,0,1.52-.279,3.7,3.7,0,0,0,1.267-.583.132.132,0,0,1,.1-.051c.051,0,.051.127.051.38q.038-.076.456-.836a8.645,8.645,0,0,0,.557-1.14,2,2,0,0,0,.127-.76,2.853,2.853,0,0,0-.481-1.444,1.608,1.608,0,0,0-1.013-.3,5.6,5.6,0,0,0-.735.127" transform="translate(-264.469 -128.949)" fill="#adadad"/>
                      <path id="Tracé_16564" data-name="Tracé 16564" d="M392.456,176.991c.861-.659,1.6-1.191,2.179-1.6s1.089-.76,1.545-1.039.937-.557,1.393-.836c.481-.279,1.216-.735,2.255-1.393a1.276,1.276,0,0,1,.38-.127.2.2,0,0,1,.177.076.7.7,0,0,1,.152.2.566.566,0,0,0,.177.177,1.244,1.244,0,0,0,.3-.076,2.907,2.907,0,0,1,.355-.051c.152,0,.253.1.253.3l-4.155,7.6q.836.076,2.28.076c.051.025.051.076.051.127a.739.739,0,0,1-.152.38,1.05,1.05,0,0,0-.152.507,1.062,1.062,0,0,0,.228.355q.152.152.152.228a.583.583,0,0,1-.076.228l-3.445.025-2.483,5.295a1.21,1.21,0,0,1-.456-.1,1.013,1.013,0,0,1-.3-.253,1.447,1.447,0,0,0-.2-.2,1.263,1.263,0,0,0-.3-.076.656.656,0,0,1-.355-.1.345.345,0,0,1-.127-.3l1.925-4.231c-.456.025-1.039.1-1.773.152-.76.076-1.191.1-1.393.1a.446.446,0,0,1,.152-.025c.025-.025.025-.025.051-.025a7.676,7.676,0,0,1-1.013.2c-.684.152-1.216.253-1.672.329a.48.48,0,0,1-.2-.38.545.545,0,0,1,.152-.329.6.6,0,0,0,.152-.279,1.291,1.291,0,0,0-.1-.279.615.615,0,0,1-.1-.279.438.438,0,0,1,.152-.3c.456-.507,1.089-1.241,1.976-2.179a21.863,21.863,0,0,1,2.027-1.9m2.2.735c-.177.1-.659.507-1.469,1.14-.811.659-1.444,1.165-1.925,1.571.127,0,.709-.051,1.824-.127.177-.025.532-.025,1.089-.076.532-.025.811-.051.811-.051a.445.445,0,0,0,.152-.025l2.685-4.813c-.431.329-1.039.785-1.8,1.368-.785.557-1.216.912-1.368,1.013" transform="translate(-289.856 -128.427)" fill="#adadad"/>
                      <path id="Tracé_16565" data-name="Tracé 16565" d="M440.021,174.427a9.793,9.793,0,0,0,1.216-.076c.405-.025.659-.051.785-.051.177,0,.532.025,1.013.051a.33.33,0,0,1,.3.38.927.927,0,0,1-.3.633.132.132,0,0,0-.051.1c0,.1.127.253.355.507.228.228.355.38.355.481,0,.127-.2.2-.583.2h-5.6l-2.2,3.243a7.09,7.09,0,0,1,2.533.405,3.76,3.76,0,0,1,1.7,1.115,2.584,2.584,0,0,1,.608,1.7A4.84,4.84,0,0,1,439.033,186a5.833,5.833,0,0,1-1.748,1.672,8.128,8.128,0,0,1-2.381,1.089,8.667,8.667,0,0,1-2.457.38,4.421,4.421,0,0,1-2.559-.684,2.27,2.27,0,0,1-.988-2,3.584,3.584,0,0,1,.532-.963,3.951,3.951,0,0,1,.836-.735,4.857,4.857,0,0,1,1.039-.481,2.711,2.711,0,0,1,.735.127,4.467,4.467,0,0,0,.836.127c-.1.076-.279.279-.532.532a6.088,6.088,0,0,0-.583.583,1.628,1.628,0,0,0-.329.456,1.531,1.531,0,0,0-.127.608c0,.076.025.177.051.355a2.942,2.942,0,0,0,1.115.177,4.523,4.523,0,0,0,1.849-.405,8.274,8.274,0,0,0,1.748-1.064,6.3,6.3,0,0,0,1.267-1.368,2.355,2.355,0,0,0,.456-1.317,1.242,1.242,0,0,0-.127-.583,2.557,2.557,0,0,0-1.191-.912,5.03,5.03,0,0,0-1.672-.279,5.725,5.725,0,0,0-1.773.279.381.381,0,0,1-.177-.228,1.123,1.123,0,0,1-.051-.329.867.867,0,0,0-.025-.279c-.025-.076-.127-.152-.3-.279-.152-.1-.253-.2-.253-.329a18.008,18.008,0,0,1,2.027-2.787c1.292-1.621,2.077-2.609,2.381-2.939a25.25,25.25,0,0,0,3.395,0" transform="translate(-320.245 -130.144)" fill="#adadad"/>
                      <path id="Tracé_16566" data-name="Tracé 16566" d="M477.627,221.885a1.062,1.062,0,0,1-.127-.557,2.011,2.011,0,0,1,.279-.988,2.58,2.58,0,0,1,.785-.785,1.988,1.988,0,0,1,1.089-.355,1.545,1.545,0,0,1,.709.177,1.1,1.1,0,0,1,.481.481,1.321,1.321,0,0,1,.127.583,2.088,2.088,0,0,1-.279.988,2.411,2.411,0,0,1-.811.785,1.925,1.925,0,0,1-1.089.355,1.343,1.343,0,0,1-.709-.177,1.437,1.437,0,0,1-.456-.507" transform="translate(-356.533 -163.669)" fill="#adadad"/>
                    </g>
                  </svg>
    
                  
                <svg class="logoSponsor logo5Dawa" id="Groupe_9679" data-name="Groupe 9679" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 180.3 26.268">
                    <path id="Tracé_16573" data-name="Tracé 16573" d="M9.2,13.134,0,26.268H7.995l9.2-13.134ZM28.191,6.552l4.6,6.552-4.6,6.552H19.025l-4.6,6.552H31.618l9.2-13.134L32.189.842ZM0,0,4.6,6.552H21.79L26.388,0ZM38.02,0l9.2,13.134-9.2,13.134h8.024l9.2-13.134L46.044,0Z" fill="#adadad"/>
                    <path id="Tracé_16574" data-name="Tracé 16574" d="M198.865,19.686H204l4.6,6.552h8.025L205.446,10.309ZM198.264,0,179.9,26.238h8.025L202.261,5.71Z" transform="translate(-125.831)" fill="#adadad"/>
                    <path id="Tracé_16575" data-name="Tracé 16575" d="M496.765,19.686H501.9l4.6,6.552H514.5l-11.15-15.929ZM496.164,0,477.8,26.238h7.994L500.161,5.71Z" transform="translate(-334.197)" fill="#adadad"/>
                    <path id="Tracé_16576" data-name="Tracé 16576" d="M320.9,0l11.18,15.959,4-5.71L328.925,0Zm28.762,0L335.3,20.528l4,5.71,10.369-14.817,3.156,4.508,4-5.71Zm20.708,0L356,20.528l4,5.71L378.4,0Z" transform="translate(-224.454)" fill="#adadad"/>
                    <path id="Tracé_16577" data-name="Tracé 16577" d="M267.6,0l18.394,26.238h7.995L275.624,0Z" transform="translate(-187.173 0)" fill="#adadad"/>
                </svg>
    
                
                <svg class="logoSponsor logo6Shimano" id="Groupe_9680" data-name="Groupe 9680" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 183.034 45.092">
                    <g id="Groupe_9686" data-name="Groupe 9686" transform="translate(0 0)">
                    <path id="Tracé_16578" data-name="Tracé 16578" d="M123.207.017c2.137,0,5.694,1.581,5.694,7.2V17.555c0,6.075-4.425,7.052-5.748,7.052H111.3c-2.065,0-5.718-1.479-5.718-7.126V6.915c0-3.585,2.038-6.874,5.792-6.9ZM115,4.307a2.759,2.759,0,0,0-2.709,2.659V17.555a2.723,2.723,0,0,0,2.684,2.762h4.5a2.78,2.78,0,0,0,2.687-2.685V6.991a2.8,2.8,0,0,0-2.659-2.685Z" transform="translate(54.133 0.009)" fill="#adadad"/>
                    <path id="Tracé_16579" data-name="Tracé 16579" d="M68.812,7.134C68.787,2.953,71.067,0,74.614,0H87.286c3.4,0,5.6,3,5.6,6.983V24.53H86.191V19.1H75.5V24.53h-6.7Zm6.7,7.181H86.171V7.158a2.77,2.77,0,0,0-2.555-2.874H78.184a2.815,2.815,0,0,0-2.679,2.7Z" transform="translate(35.277 0)" fill="#adadad"/>
                    <path id="Tracé_16580" data-name="Tracé 16580" d="M87.677,24.555H94.4V4.3h6.633a2.854,2.854,0,0,1,2.777,2.714V24.558h6.632V7.185c0-3.345-1.523-7.235-5.827-7.144H87.674Z" transform="translate(44.95 0.02)" fill="#adadad"/>
                    <path id="Tracé_16581" data-name="Tracé 16581" d="M45.073.041V24.554h6.633V4.3H57.53v20.27h6.721V4.3H67.3A2.834,2.834,0,0,1,69.99,7.01V24.557h6.724V7.01c0-3.528-1.883-6.958-5.739-6.958Z" transform="translate(23.108 0.021)" fill="#adadad"/>
                    <rect id="Rectangle_1813" data-name="Rectangle 1813" width="7.098" height="24.533" transform="translate(55.877 0.008)" fill="#adadad"/>
                    <path id="Tracé_16582" data-name="Tracé 16582" d="M18.114.04V24.553h6.721V19.121h9.86V24.55h6.722V.04H34.694V14.332h-9.86V.04Z" transform="translate(9.287 0.021)" fill="#adadad"/>
                    <path id="Tracé_16583" data-name="Tracé 16583" d="M23.008.042H6.379A6.149,6.149,0,0,0,.42,4.111,13.652,13.652,0,0,0,.51,11.165a6.1,6.1,0,0,0,5.834,3.618H15.03c1.256,0,2.062.908,2.154,2.625.088,1.628-.539,2.894-2.154,2.894H.777v4.252H17.449a5.477,5.477,0,0,0,5.558-3.709,11.887,11.887,0,0,0,0-8.144A5.8,5.8,0,0,0,17.27,9.265H8.487c-1.256,0-1.966-.908-1.966-2.532S7.24,4.2,8.487,4.2H23.009Z" transform="translate(0 0.02)" fill="#adadad"/>
                    <rect id="Rectangle_1814" data-name="Rectangle 1814" width="183.03" height="4.102" transform="translate(0.005 32.785)" fill="#adadad"/>
                    <rect id="Rectangle_1815" data-name="Rectangle 1815" width="183.03" height="12.307" transform="translate(0.005 32.784)" fill="#adadad"/>
                    <rect id="Rectangle_1816" data-name="Rectangle 1816" width="183.03" height="4.102" transform="translate(0.005 40.989)" fill="#adadad"/>
                    </g>
                </svg>
    
                
                <svg class="logoSponsor logo7AbuGarcia" id="Groupe_9681" data-name="Groupe 9681" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="131.919" height="60.077" viewBox="0 0 131.919 60.077">
                    <defs>
                    <clipPath id="clip-path">
                        <rect id="Rectangle_1818" data-name="Rectangle 1818"  fill="#adadad"/>
                    </clipPath>
                    </defs>
                    <path id="Tracé_16584" data-name="Tracé 16584" d="M45.27,0,39.2,16.427H76.8L82.873,0Z" transform="translate(-30.58 0)" fill="#adadad"/>
                    <path id="Tracé_16585" data-name="Tracé 16585" d="M27.721,84.6,25.5,90.581H63.081L65.3,84.6Z" transform="translate(-19.893 -65.996)" fill="#adadad"/>
                    <path id="Tracé_16586" data-name="Tracé 16586" d="M223.626,8.269,226.969,18.6h-6.817ZM219.668,0,208.3,30.677H216l2.155-6.135h10.907l2,6.135h7.895L227.738,0Z" transform="translate(-162.494 -0.001)" fill="#adadad"/>
                    <g id="Groupe_9688" data-name="Groupe 9688">
                    <g id="Groupe_9687" data-name="Groupe 9687" clip-path="url(#clip-path)">
                        <path id="Tracé_16587" data-name="Tracé 16587" d="M371.989,9.9a9.474,9.474,0,0,0-6.729-2.7,7.946,7.946,0,0,0-6.4,2.793V0H352V30.7h6.729V28.631a8.089,8.089,0,0,0,6.377,2.661,9.1,9.1,0,0,0,6.707-2.617c2.177-2.2,3.386-5.629,3.386-9.676.022-3.848-1.122-6.993-3.211-9.1m-3.826,9.5c0,.638-.132,6.311-4.552,6.311a4.726,4.726,0,0,1-3.386-1.253,6.732,6.732,0,0,1-1.583-4.728c0-2.595.528-4.464,1.649-5.563a4.865,4.865,0,0,1,6.267,0c1.341,1.385,1.605,3.628,1.605,5.234" transform="translate(-274.595)" fill="#adadad"/>
                        <path id="Tracé_16588" data-name="Tracé 16588" d="M478.833,35.2V48.416c0,4.31-3.32,4.662-4.332,4.662a3.555,3.555,0,0,1-2.617-.88,3.649,3.649,0,0,1-.9-2.815V35.222H464.1V50.241a8.812,8.812,0,0,0,2.221,6.377,8.479,8.479,0,0,0,6.025,2.177,8.13,8.13,0,0,0,6.685-2.969V58.18h6.619V35.2Z" transform="translate(-362.044 -27.459)" fill="#adadad"/>
                        <path id="Tracé_16589" data-name="Tracé 16589" d="M29.357,140.623H16.009v5.827h7.1c-1.429,5.366-5.717,5.783-7.059,5.783a8.628,8.628,0,0,1-6.179-2.2c-1.627-1.671-2.441-4.244-2.441-7.7,0-3.518.924-6.311,2.727-8.092A7.959,7.959,0,0,1,15.987,132a6.762,6.762,0,0,1,4.9,1.979,4.463,4.463,0,0,1,1.473,2.529v.374h7.323l-.044-.418C29.357,132.861,26.036,126,15.591,126A15.094,15.094,0,0,0,4.53,130.2C1.605,133.081,0,137.369,0,142.273c0,4.97,1.539,9.126,4.4,11.985a14.361,14.361,0,0,0,10.291,4.112,11.646,11.646,0,0,0,9.456-4.112l.506,2.969.066.308h5.036v-16.91Z" transform="translate(0 -98.292)" fill="#adadad"/>
                        <path id="Tracé_16590" data-name="Tracé 16590" d="M167.216,184.422c-.418-.154-1.122-.594-1.122-3.3V169.117a5.915,5.915,0,0,0-1.605-4.222c-2.375-2.331-6.531-2.595-8.18-2.595-4.75,0-10.313.9-11.017,8.092l-.066.44h6.817l.022-.352c.2-1.341.77-2.749,3.452-2.749,1.187,0,2.485.088,3.189.792a1.968,1.968,0,0,1,.506,1.407c0,.264,0,1.121-1.847,1.363l-5.607.792c-4.6.616-7.257,3.342-7.257,7.455a6.28,6.28,0,0,0,1.8,4.706,8.278,8.278,0,0,0,5.827,2.133,10.225,10.225,0,0,0,7.367-2.749,21.97,21.97,0,0,0,.594,2.177H167.5v-1.363Zm-13.172-2.947a2.721,2.721,0,0,1-1.913-.7,2.16,2.16,0,0,1-.572-1.583c0-1.957,1.3-2.507,3.892-2.947a14.288,14.288,0,0,0,3.76-.9V177.5c0,2.507-2.639,3.98-5.168,3.98" transform="translate(-112.724 -126.61)" fill="#adadad"/>
                        <path id="Tracé_16591" data-name="Tracé 16591" d="M270.72,162.3h-.2a6.576,6.576,0,0,0-6.047,3.5v-2.9H257.9v22.958h6.839V173.911a5.3,5.3,0,0,1,1.121-3.628,5.824,5.824,0,0,1,4.068-1.275,6,6,0,0,1,.792.066Z" transform="translate(-201.188 -126.61)" fill="#adadad"/>
                        <path id="Tracé_16592" data-name="Tracé 16592" d="M332.541,176.989v.374a3.9,3.9,0,0,1-6.509,2.485c-1.5-1.5-1.5-4.42-1.5-5.805,0-1.012.154-3.5,1.583-4.97a3.922,3.922,0,0,1,2.815-1.056c2.727-.176,3.452,2.221,3.628,3.255l.066.308h6.9l-.022-.418c-.528-6.553-5.805-8.862-10.577-8.862-7.389,0-11.435,4.508-11.435,12.688,0,2.067.4,5.893,3.057,8.576,1.913,1.913,4.6,2.859,8,2.859,7.938,0,10.6-5.651,10.929-9.038l.044-.418h-6.993Z" transform="translate(-247.681 -126.61)" fill="#adadad"/>
                        <rect id="Rectangle_1817" data-name="Rectangle 1817" width="6.883" height="22.958" transform="translate(93.392 36.306)" fill="#adadad"/>
                        <path id="Tracé_16593" data-name="Tracé 16593" d="M486.56,184.422c-.418-.154-1.143-.594-1.143-3.3V169.117a5.858,5.858,0,0,0-1.649-4.222c-2.353-2.331-6.531-2.595-8.18-2.595-4.75,0-10.269.9-11.039,8.092l-.044.44h6.839l.044-.352c.154-1.341.748-2.749,3.43-2.749,1.209,0,2.507.088,3.211.792a2.058,2.058,0,0,1,.484,1.407c0,.264,0,1.121-1.847,1.363l-5.629.792c-4.6.616-7.235,3.342-7.235,7.455a6.28,6.28,0,0,0,1.8,4.706,8.223,8.223,0,0,0,5.805,2.133,10.183,10.183,0,0,0,7.367-2.749,21.971,21.971,0,0,0,.594,2.177H486.8v-1.363Zm-13.238-2.947a2.783,2.783,0,0,1-1.891-.7,2.074,2.074,0,0,1-.572-1.583c0-1.957,1.319-2.507,3.87-2.947a14.773,14.773,0,0,0,3.8-.9V177.5c0,2.507-2.617,3.98-5.212,3.98" transform="translate(-361.81 -126.61)" fill="#adadad"/>
                        <path id="Tracé_16594" data-name="Tracé 16594" d="M571.5,243.379a3.123,3.123,0,1,1,3.123,3.079,3.1,3.1,0,0,1-3.123-3.079m3.123,2.595a2.573,2.573,0,1,0-2.551-2.573,2.557,2.557,0,0,0,2.551,2.573m-.66-.814h-.528v-3.54h1.341c.836,0,1.253.308,1.253.99a.885.885,0,0,1-.9.968l.99,1.583h-.638l-.9-1.539h-.638v1.539Zm.638-1.979c.462,0,.88-.022.88-.572,0-.44-.4-.506-.77-.506h-.748v1.078Z" transform="translate(-445.827 -187.458)" fill="#adadad"/>
                    </g>
                    </g>
                </svg>
    
                
                <svg class="logoSponsor logo8NRK" id="Groupe_9682" data-name="Groupe 9682" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120.637 43.216">
                    <g id="Groupe_9692" data-name="Groupe 9692">
                    <path id="Tracé_16595" data-name="Tracé 16595" d="M104.457,43.2s-9.8-15.826-11.211-18.241c-1.414-2.16-1.473-3.632-.059-5.733,1.414-2.356,11.27-18.4,11.27-18.4h16.179L108.718,20.3a2.819,2.819,0,0,0,.1,3.593c.137.255,11.82,19.321,11.82,19.321H104.457Zm-14.2,0H75.633V.825H90.261ZM66.4,16.807a8.4,8.4,0,1,1,8.423-8.4,8.413,8.413,0,0,1-8.423,8.4M57.02,43.2H42.352V.825H57.02Zm-31.828,0L15.649.825h9.5a8.475,8.475,0,0,1,8.306,6.794L41.449,43.2ZM14.8,43.2H0V.825H14.8Z" fill="#adadad"/>
                    </g>
                </svg>
    
                
                <svg class="logoSponsor logoFlecheDroite" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                    <g id="Groupe_4298" data-name="Groupe 4298" transform="translate(-1812.5 -3447.5)">
                    <g id="Groupe_4239" data-name="Groupe 4239" transform="translate(1813 3448)">
                        <circle id="Ellipse_2" data-name="Ellipse 2" cx="26" cy="26" r="26" fill="none" stroke="#4d4d4d" stroke-miterlimit="10" stroke-width="1"/>
                        <path id="Tracé_16173" data-name="Tracé 16173" d="M104,92l7.179,6.461L104,104.922" transform="translate(-81.179 -73)" fill="none" stroke="#4d4d4d" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                    </g>
                    </g>
                </svg>
      
            </div>
            
          
  
  
  
              


        </div>


    </div>

    <footer>
        <div class="containerFooter1">
            <div class="containerFooterLogo">
                
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64.666 74.668">
    <path id="Tracé_16547" data-name="Tracé 16547" d="M32.333,46.672,0,28V56l16.166,9.332V46.672l8.084,4.666V70l8.083,4.666L40.416,70V51.338L48.5,46.672V65.336L64.666,56V28ZM64.666,0,32.333,18.664,0,0V18.664L32.333,37.34,64.666,18.664Z" fill="#fff"/>
                </svg>
            </div>

            <div class="containerNousSuivre">
                <p>NOUS SUIVRE</p>
            </div>

            <div class="containerLogo containerFacebook">
                
                <svg id="Groupe_4" data-name="Groupe 4" xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24">
                    <path id="Tracé_14" data-name="Tracé 14" d="M24,12A12,12,0,1,0,10.125,23.851V15.466H7.078V12h3.047V9.355c0-3.007,1.792-4.668,4.533-4.668a18.456,18.456,0,0,1,2.686.234V7.874H15.831a1.734,1.734,0,0,0-1.956,1.874V12H17.2l-.532,3.468h-2.8v8.384A12,12,0,0,0,24,12Z" fill="#f0ede9"/>
                    <path id="Tracé_15" data-name="Tracé 15" d="M311.823,211.04l.545-3.552H308.96v-2.3a1.776,1.776,0,0,1,2-1.919h1.549V200.24a18.9,18.9,0,0,0-2.751-.24c-2.807,0-4.641,1.7-4.641,4.781v2.707H302v3.552h3.12v8.586a12.417,12.417,0,0,0,3.84,0V211.04Z" transform="translate(-295.049 -195.775)" fill="#222"/>
                </svg>
            </div>

            <div class="containerLogo containeTwitter">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24">
                    <g id="Groupe_5" data-name="Groupe 5" transform="translate(-0.001)">
                      <g id="Groupe_6" data-name="Groupe 6" transform="translate(0.001)">
                        <circle id="Ellipse_1" data-name="Ellipse 1" cx="12" cy="12" r="12" transform="translate(0)" fill="#f0ede9"/>
                        <path id="Tracé_16" data-name="Tracé 16" d="M38.92,35.4a5.534,5.534,0,0,1-1.628.459,2.91,2.91,0,0,0,1.247-1.613,5.58,5.58,0,0,1-1.8.707,2.8,2.8,0,0,0-2.07-.92,2.876,2.876,0,0,0-2.835,2.915,2.989,2.989,0,0,0,.074.664,7.975,7.975,0,0,1-5.843-3.046,2.974,2.974,0,0,0,.877,3.892,2.756,2.756,0,0,1-1.284-.365v.037a2.9,2.9,0,0,0,2.274,2.858,2.769,2.769,0,0,1-1.28.05A2.849,2.849,0,0,0,29.3,43.059a5.593,5.593,0,0,1-4.2,1.207,7.858,7.858,0,0,0,4.345,1.31,8.134,8.134,0,0,0,8.065-8.295c0-.126,0-.252-.008-.377A5.842,5.842,0,0,0,38.92,35.4Z" transform="translate(-19.646 -26.856)" fill="#222"/>
                      </g>
                    </g>
                  </svg>
            </div>

            <div class="containerLogo containerInst">
                
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24">
                    <g id="Groupe_9543" data-name="Groupe 9543" transform="translate(-432.166 -5946.968)">
                    <g id="Groupe_9543-2" data-name="Groupe 9543" transform="translate(432.166 5946.968)">
                        <path id="Tracé_16291" data-name="Tracé 16291" d="M15.5,6.939A2.07,2.07,0,0,0,14.31,5.753a3.458,3.458,0,0,0-1.16-.215c-.659-.03-.856-.037-2.525-.037s-1.866.008-2.525.038a3.457,3.457,0,0,0-1.161.215A2.07,2.07,0,0,0,5.753,6.94,3.458,3.458,0,0,0,5.538,8.1c-.03.659-.038.856-.038,2.525s.008,1.866.038,2.525a3.457,3.457,0,0,0,.215,1.161A2.07,2.07,0,0,0,6.94,15.5a3.457,3.457,0,0,0,1.16.215c.659.03.856.037,2.525.037s1.866-.007,2.525-.037a3.458,3.458,0,0,0,1.161-.215A2.07,2.07,0,0,0,15.5,14.31a3.457,3.457,0,0,0,.215-1.16c.03-.659.037-.856.037-2.525s-.007-1.866-.037-2.525A3.458,3.458,0,0,0,15.5,6.939Zm-4.872,6.9a3.21,3.21,0,1,1,3.21-3.21,3.21,3.21,0,0,1-3.21,3.21Zm3.336-5.8a.75.75,0,1,1,.75-.75.75.75,0,0,1-.75.75Z" transform="translate(1.375 1.375)" fill="#f0ede9"/>
                        <circle id="Ellipse_14" data-name="Ellipse 14" cx="2.084" cy="2.084" r="2.084" transform="translate(9.916 9.916)" fill="#f0ede9"/>
                        <path id="Tracé_16292" data-name="Tracé 16292" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm6.212,14.577a4.588,4.588,0,0,1-.291,1.516,3.2,3.2,0,0,1-1.827,1.827,4.588,4.588,0,0,1-1.516.291c-.668.03-.88.038-2.578.038s-1.91-.007-2.578-.038a4.588,4.588,0,0,1-1.516-.291,3.2,3.2,0,0,1-1.828-1.827,4.588,4.588,0,0,1-.291-1.516C5.757,13.91,5.75,13.7,5.75,12s.008-1.91.038-2.578a4.588,4.588,0,0,1,.291-1.516A3.2,3.2,0,0,1,7.906,6.079a4.587,4.587,0,0,1,1.516-.291c.667-.03.88-.038,2.577-.038s1.91.008,2.578.038a4.588,4.588,0,0,1,1.516.291,3.2,3.2,0,0,1,1.827,1.827,4.588,4.588,0,0,1,.291,1.516c.03.667.038.88.038,2.577S18.243,13.91,18.212,14.577Z" fill="#f0ede9"/>
                    </g>
                    </g>
                </svg>
            </div>

            <div class="containerLogo containerYouTube">
                
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24">
                    <g id="Groupe_7" data-name="Groupe 7" transform="translate(-14.207 -14.166)">
                    <path id="Tracé_17" data-name="Tracé 17" d="M26.207,14.166a12,12,0,1,0,12,12A12,12,0,0,0,26.207,14.166Zm6.719,14.7a1.67,1.67,0,0,1-1.67,1.67,41.615,41.615,0,0,1-5.131.207,38.317,38.317,0,0,1-5.036-.207,1.67,1.67,0,0,1-1.671-1.671V23.358a1.67,1.67,0,0,1,1.671-1.67,38.276,38.276,0,0,1,5.032-.207,41.659,41.659,0,0,1,5.135.207,1.67,1.67,0,0,1,1.67,1.67Z" transform="translate(0)" fill="#f0ede9"/>
                    <path id="Tracé_18" data-name="Tracé 18" d="M62.019,64.52l4.654-2.687-4.654-2.687Z" transform="translate(-37.812 -35.704)" fill="#f0ede9"/>
                    </g>
                </svg>
            </div>

            <div class="containerLogo containerIn">
                
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24">
                    <path id="Tracé_19" data-name="Tracé 19" d="M19.025,7.025a12,12,0,1,0,12,12A12,12,0,0,0,19.025,7.025Zm-3.2,17.8H13.189V16.314h2.635ZM14.493,15.2a1.571,1.571,0,1,1,1.558-1.571A1.564,1.564,0,0,1,14.493,15.2Zm11.2,9.627H23.075V20.358c0-1.225-.465-1.91-1.435-1.91-1.055,0-1.606.712-1.606,1.91v4.468H17.508V16.314h2.527v1.146A2.969,2.969,0,0,1,22.6,16.055c1.8,0,3.1,1.1,3.1,3.382v5.39Z" transform="translate(-7.025 -7.025)" fill="#f0ede9"/>
                </svg>
            </div>

            <div class="containerDescriptionFooter">
                <p>LES PÊCHES </p>
                <p>pêche à la carpe</p>
                <p>pêche au silure</p>
                <p>MATÉRIEL & APPÂTS</p>
            </div>

            <div class="containerLogoBlogFooter">
                
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 93.893 58.924">
                    <defs>
                    <clipPath id="clip-path">
                        <rect id="Rectangle_1810" data-name="Rectangle 1810" width="93.893" height="58.924" fill="none"/>
                    </clipPath>
                    </defs>
                    <g id="Groupe_9675" data-name="Groupe 9675" transform="translate(-123 -4490.959)">
                    <g id="Groupe_9671" data-name="Groupe 9671" transform="translate(123 4490.959)">
                        <g id="Groupe_9670" data-name="Groupe 9670" clip-path="url(#clip-path)">
                        <path id="Tracé_16544" data-name="Tracé 16544" d="M24.929,333.606l.068.775,35.249,13.835L47.517,332.411l-.068-.775Z" transform="translate(-21.746 -289.292)" fill="#fff"/>
                        <g id="Groupe_9669" data-name="Groupe 9669">
                            <g id="Groupe_9668" data-name="Groupe 9668" clip-path="url(#clip-path)">
                            <image id="Rectangle_1807" data-name="Rectangle 1807" width="35.495" height="16.599" transform="translate(3.064 42.326)" opacity="0.5" xlink:href="data:image/png;base64,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" style="mix-blend-mode: darken;isolation: isolate"/>
                            </g>
                        </g>
                        <rect id="Rectangle_1809" data-name="Rectangle 1809" width="90.988" height="37.3" transform="translate(0 7.93) rotate(-5)" fill="#fff"/>
                        </g>
                    </g>
                    <path id="Tracé_16545" data-name="Tracé 16545" d="M9.722,14.033,0,8.418v8.421l4.861,2.806V14.033l2.431,1.4v5.612l2.43,1.4,2.43-1.4V15.436l2.43-1.4v5.612l4.861-2.806V8.418ZM19.443,0,9.722,5.612,0,0V5.612l9.722,5.615,9.722-5.615Z" transform="matrix(0.996, -0.087, 0.087, 0.996, 187.03, 4501.379)" fill="#fd7e23"/>
                    <text id="Blog" transform="matrix(0.995, -0.105, 0.105, 0.995, 133.253, 4523.467)" fill="#ff7e1f" font-size="24" font-family="Asap-Bold, Asap" font-weight="700"><tspan x="0" y="0">Blog</tspan></text>
                    </g>
                </svg>

            </div>

            <div class="containerPartenariatsNewsLetter">
                <p>PARTENARIATS</p>
                <p>NEWSLETTER</p>
                
            </div>

            <div class="containerRecevoirActualies">
                <p>RECEVOIR NOS ACTUALITÉS</p>

                <div class="divInputFooter">
                    <input type="email" placeholder="Entrez votre e-mail" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                    
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20">
                        <path id="Tracé_16294" data-name="Tracé 16294" d="M16.961,11.809a.5.5,0,0,0-.109-.163l-4.5-4.5a.5.5,0,0,0-.707.707L15.293,11.5H7.5a.5.5,0,0,0,0,1h7.793l-3.647,3.646a.5.5,0,1,0,.707.707l4.5-4.5A.494.494,0,0,0,17,12.01S17,12,17,12s0,0,0-.007A.5.5,0,0,0,16.961,11.809ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,19a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(-2 -2)" fill="#f0ede9"/>
                    </svg></a>
                </div>
                
                <div class="accepterConditionCheckboxEtLabel">
                    <svg class="svgCheck" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 16 16">
                        <g id="Groupe_9723" data-name="Groupe 9723" transform="translate(-5 -4.995)">
                        <path id="Tracé_16293" data-name="Tracé 16293" d="M18.838,5.013a2.233,2.233,0,0,1,2.151,2.15c.024,3.882,0,7.764,0,11.646a2.242,2.242,0,0,1-2.151,2.175c-3.884.024-7.768,0-11.651,0a2.242,2.242,0,0,1-2.176-2.15c-.024-3.882,0-7.764,0-11.645A2.242,2.242,0,0,1,7.162,5.013q5.838-.036,11.676,0ZM7.192,6.465a.752.752,0,0,0-.729.717q-.036,5.818,0,11.634a.753.753,0,0,0,.717.717q5.82.036,11.64,0a.753.753,0,0,0,.717-.717q.036-5.818,0-11.634a.752.752,0,0,0-.717-.717c-3.876-.024-7.752,0-11.628,0Zm2.29,5.817a.61.61,0,0,1,.4.2L12.2,14.8l3.855-5.138s.438-.409.859-.236a.752.752,0,0,1,.353,1.031.862.862,0,0,1-.05.076l-4.358,5.808a.62.62,0,0,1-.195.18.742.742,0,0,1-.833-.043.861.861,0,0,1-.067-.059l-2.906-2.9a.621.621,0,0,1-.169-.268.749.749,0,0,1,.706-.971.769.769,0,0,1,.091.009Z" fill="#938a56"/>
                        </g>
                    </svg>
    
                    <label class="accepterCondition">J’ai lu et j’accepte les conditions</label>
                </div>
        
            </div>

            <div class="containerQuiSommesNousContactFooter">
                <p>QUI SOMMES-NOUS ?</p>
                <p><a href="#">CONTACT</a></p>
            </div>

            
        <div class="containerFlecheRemonterFooter">
            <a  href="#">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 81 81">
                    <g id="Groupe_9540" data-name="Groupe 9540" transform="translate(0.041 80.959) rotate(-90)">
                    <circle id="Ellipse_2" data-name="Ellipse 2" cx="40" cy="40" r="40" transform="translate(0.459 0.459)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1"/>
                    <path id="Tracé_16173" data-name="Tracé 16173" d="M104,92l11.108,10-11.108,10" transform="translate(-68.689 -62.601)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                    </g>
                </svg>
      
            </a>    
            
               
        </div>

           


        </div>

        <div class="containerFooter2">
            <p>© 2023 VM</p>
            <span></span>
            <p>Accessibilité </p>
            <span></span>
            <p>Mentions légales</p>
            <span></span>
            <p> Données personnelles</p>
            <span></span>
            <p>Plan du site</p>
            <span></span>
            <p>Réalisations</p>
            
            <svg class="svgAyalineFooter2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="57.521" height="13.18" viewBox="0 0 57.521 13.18">
                <defs>
                <clipPath id="clip-path">
                    <rect id="Rectangle_4" data-name="Rectangle 4"  fill="#f0ede9"/>
                </clipPath>
                </defs>
                <g id="Groupe_348" data-name="Groupe 348" transform="translate(-1568 -2639.715)">
                <g id="Groupe_3" data-name="Groupe 3" transform="translate(1568 2639.715)">
                    <g id="Groupe_2" data-name="Groupe 2" transform="translate(0 0)" clip-path="url(#clip-path)">
                    <path id="Tracé_2" data-name="Tracé 2" d="M170.4,3.957h-1.328a1.275,1.275,0,0,1-1.14-1.509,1.256,1.256,0,0,1,1.373-.977,1.213,1.213,0,0,1,.954.655.879.879,0,0,1,.133.377c.009.188.009,1.454.009,1.454" transform="translate(-134.658 -1.175)" fill="#f0ede9"/>
                    <rect id="Rectangle_2" data-name="Rectangle 2" width="1.82" height="12.861" transform="translate(29.86 0.268)" fill="#f0ede9"/>
                    <rect id="Rectangle_3" data-name="Rectangle 3" width="1.798" height="9.172" transform="translate(33.99 3.957)" fill="#f0ede9"/>
                    <path id="Tracé_3" data-name="Tracé 3" d="M192.188,22.771a4.671,4.671,0,0,1,.983-1.454,4.574,4.574,0,0,1,1.465-.983,4.628,4.628,0,0,1,3.574,0,4.771,4.771,0,0,1,1.466.983,4.545,4.545,0,0,1,.991,1.454,4.416,4.416,0,0,1,.358,1.791v4.611h-1.819V24.561a2.7,2.7,0,0,0-.216-1.075,2.831,2.831,0,0,0-.594-.882,2.729,2.729,0,0,0-.894-.594,2.772,2.772,0,0,0-1.086-.217,2.7,2.7,0,0,0-1.077.217,2.761,2.761,0,0,0-1.693,2.551v4.612H191.83V24.562a4.453,4.453,0,0,1,.358-1.791" transform="translate(-153.829 -16.018)" fill="#f0ede9"/>
                    <path id="Tracé_4" data-name="Tracé 4" d="M254.777,26.064l1.288,1.289-.636.634a4.589,4.589,0,0,1-6.506,0,4.34,4.34,0,0,1-1-1.524,4.793,4.793,0,0,1-.329-1.73,4.707,4.707,0,0,1,.329-1.718,4.351,4.351,0,0,1,1-1.513,4.472,4.472,0,0,1,1.523-1.015,4.608,4.608,0,0,1,3.46,0A4.463,4.463,0,0,1,255.43,21.5l.636.633-5.1,5.1a2.73,2.73,0,0,0,3.173-.532Zm-4.565-3.3a2.742,2.742,0,0,0-.532,3.172q.248-.244.748-.745t1.066-1.065c.375-.376.734-.734,1.082-1.076s.618-.606.809-.8a2.768,2.768,0,0,0-1.648-.265,2.645,2.645,0,0,0-1.524.778" transform="translate(-198.544 -16.159)" fill="#f0ede9"/>
                    <path id="Tracé_5" data-name="Tracé 5" d="M8.924,24.581a4.855,4.855,0,0,0-1.3-2.72,4.371,4.371,0,0,0-5.158-.982A4.789,4.789,0,0,0,0,25.183a4.319,4.319,0,0,0,3.386,4.081,6.152,6.152,0,0,0,3.637-.57v.68l1.906.009s.056-3.346-.008-4.8m-4.5,3.058a2.647,2.647,0,0,1,0-5.294,2.647,2.647,0,0,1,0,5.294" transform="translate(0 -16.388)" fill="#f0ede9"/>
                    <path id="Tracé_6" data-name="Tracé 6" d="M101.845,24.735a4.87,4.87,0,0,0-1.3-2.721,4.367,4.367,0,0,0-5.157-.979,4.79,4.79,0,0,0-2.469,4.3,4.322,4.322,0,0,0,3.385,4.081,6.163,6.163,0,0,0,3.638-.57v.68l1.906.009s.054-3.346-.008-4.8m-4.5,3.058a2.647,2.647,0,1,1,2.6-2.645,2.619,2.619,0,0,1-2.6,2.645" transform="translate(-74.512 -16.511)" fill="#f0ede9"/>
                    <path id="Tracé_7" data-name="Tracé 7" d="M44.934,0s1.7.369,1.858,1.045c0,0,.047.042.047.224s-.007,2.5.009,2.729A2.771,2.771,0,0,0,48.026,6.14a2.856,2.856,0,0,0,4.538-2.127s0-2.768.026-2.88.134-.443.728-.727A5.1,5.1,0,0,1,54.48.018L54.472,4a4.334,4.334,0,0,1-.752,2.4,4.81,4.81,0,0,1-3.051,2.1l-.008,4.579H48.754L48.73,8.5a4.635,4.635,0,0,1-3.038-2.082A4.753,4.753,0,0,1,44.934,4Z" transform="translate(-36.033 0)" fill="#f0ede9"/>
                    </g>
                </g>
                </g>
            </svg>
  
        </div> -->

        <?php require_once("footer.php") ?>

<!--     </footer>

    
    


    
</body>
</html> -->
