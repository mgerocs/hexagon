<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>         

            article.hexgrid {
                position: absolute;
            }

            .lab_item {
                display: block;
                width: 6vw;
                height: 7vw;
                position: relative;                	
                float: left;  
                z-index: 1000;
            }     

            div.lab_item.border {
                -webkit-transform: scale(1.1, 1.1) translate(-0.5%, -2%);
                -moz-transform: scale(1.1, 1.1) translate(-0.5%, -2%);
                transform: scale(1.1, 1.1) translate(-0.5%, -2%);                
            }

            div.lab_item.border.decor1 {
                -webkit-transform: scale(1.1, 1.1) translate(-456%, 40%);
                -moz-transform: scale(1.1, 1.1) translate(-456%, 40%);
                transform: scale(1.1, 1.1) translate(-456%, 40%);
            }

            div.lab_item.decor1 {
                -webkit-transform: translate(-501%, 48%);
                -moz-transform: translate(-501%, 48%);
                transform: translate(-501%, 48%);
                z-index: 900;
            }            

            .decor1 .hexagon-in2 {                
                background-image: url('./abstract_poly1.png');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .decor2 .hexagon-in2 {                
                background-image: url('./abstract_poly2.png');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            div.lab_item.border.decor2 {
                -webkit-transform: scale(1.1, 1.1) translate(-274%, -94%);
                -moz-transform: scale(1.1, 1.1) translate(-274%, -94%);
                transform: scale(1.1, 1.1) translate(-274%, -94%);
            }

            div.lab_item.decor2 {
                -webkit-transform: translate(-300%, -100%);
                -moz-transform: translate(-300%, -100%);
                transform: translate(-300%, -100%);
                z-index: 900;
            } 

            .hexagon2 {                
                position: absolute;
                width: 6.6vw;
                height: 10.3vw; 
            }

            .hexagon {
                overflow: hidden;
                visibility: hidden;                

                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                transform: rotate(90deg);
                cursor: pointer;
            }

            .hexagon-in1 {
                overflow: hidden;
                width: 100%;
                height: 100%;

                -webkit-transform: rotate(-60deg);
                -moz-transform: rotate(-60deg);
                -o-transform: rotate(-60deg);
                -ms-transform: rotate(-60deg);
                transform: rotate(-60deg);
            }

            .hexagon-in2 {	
                overflow: hidden;
                width: 100%;
                height: 100%;

                visibility: visible;

                -webkit-transform: rotate(-60deg);
                -moz-transform: rotate(-60deg);
                -o-transform: rotate(-60deg);
                -ms-transform: rotate(-60deg);
                transform: rotate(-60deg);

                -webkit-transition: all 0.5s ease;
                -moz-transition: all 0.5s ease;
                -o-transition: all 0.5s ease;
                -ms-transition: all 0.5s ease;
                transition: all 0.5s ease;
            }

            .hexagon-in2.border {
                background: red;
            }

            a.menuitem {
                
                margin-left: -10%;
                display: block;
                width: 120%;                
                height: 100%;                
                background: #000;
                color: red;
                text-align: center;
                -webkit-transform: rotate(30deg);
                -moz-transform: rotate(30deg);
                -o-transform: rotate(30deg);
                -ms-transform: rotate(30deg);
                transform: rotate(30deg);             
            }

            a.menuitem:hover {
                background: yellow;
            }

            a.menuitem > span {
                position: relative;
                top: 45%;
                transform: translateY(-45%);
            }

            #lab article {
                padding: 6em;
                width: 100%;
                margin: 0 auto;
            }

            .lab_item:nth-child(even) {
                transform: translate(0, -50%);
            }

            .lab_item.border:nth-child(even) {
                transform: scale(1.1, 1.1) translate(0, -48%);
            }

            /*.lab_item:nth-child(7n-2) {
                    margin-left: 101px;
            }
            
            .lab_item:nth-child(n+5) {
                    margin-top: -55px;
            }
            
            @media (max-width: 1015px) {
                    #lab {
                    width: 100%;
            }
            
            }
            
            @media (max-width: 820px) {
                    .lab_item:nth-child(5n-1) {
                    margin-left: 102px;
            }
            
            .lab_item:nth-child(n+4) {
                    margin-top: -62px;
            }
            
            .lab_item:nth-child(7n-2) {
                    margin-left: 0px;
            }
            
            .lab_item:nth-child(n+5) {
                    margin-top: -56px;
            }
            
            #lab article {
                    width: 610px;
            }
            
            }
            
            @media (max-width: 640px) {
                    #lab article {
                    width: 405px;
            }
            
            .lab_item:nth-child(5n-1) {
                    margin-left: 0px;
            }
            
            .lab_item:nth-child(3n) {
                    margin-left: 102px;
            }
            
            .lab_item:nth-child(n+3) {
                    margin-top: -56px;
            }
            
            }
            
            @media (max-width: 450px) {
                    #lab article {
                    width: 300px;
            }
            
            .lab_item:nth-child(3n) {
                    margin-left: 0px;
            }
            
            .lab_item:nth-child(2n) {
                    margin-left: 102px;
            }
            
            .lab_item:nth-child(n+2) {
                    margin-top: -56px;
            }
            
            }*/
        </style>
    </head>
    <body>
        <section id="lab">
            <div class="sectionheader">	<h1>The lab</h1><div class="beaker"></div></div>	
            <article class="hexgrid border">
                <div class="lab_item border">		
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2 border"></div>
                        </div>
                    </div>
                </div>
                <div class="lab_item border">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2 border"></div>
                        </div>
                    </div>
                </div>
                <div class="lab_item border">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2 border"></div>
                        </div>
                    </div>
                </div>
                <div class="lab_item border">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2 border"></div>
                        </div>
                    </div>
                </div>
                <div class="lab_item border">        
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2 border"></div>
                        </div>
                    </div>
                </div>
                <div class="lab_item border">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2 border"></div>
                        </div>
                    </div>
                </div>  
                <div class="lab_item border decor1">        
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2 border"></div>
                        </div>
                    </div>
                </div>
                <div class="lab_item border decor2">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2 border"></div>
                        </div>
                    </div>
                </div>  
            </article>

            <article class="hexgrid">
                <div class="lab_item">		
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2">
                                <a class="menuitem" href="#"><span>Menu 1</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2">
                                <a class="menuitem" href="#"><span>Menu 2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2">
                                <a class="menuitem" href="#"><span>Menu 3</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2">
                                <a class="menuitem" href="#"><span>Menu 4</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">        
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2">
                                <a class="menuitem" href="#"><span>Menu 5</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lab_item">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2">
                                <a class="menuitem" href="#"><span>Menu 6</span></a>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="lab_item decor1">        
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2"></div>
                        </div>
                    </div>
                </div>
                <div class="lab_item decor2">
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2"></div>
                        </div>
                    </div>
                </div>                 
            </article>
        </section>
    </body>
</html>
