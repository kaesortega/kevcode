
$(document).ready(function(){

    card1 = new Card('Buzikendo','./imgs/portafolio/buzikendo.jpg');
    card2 = new Card('Festival Cine Eu','./imgs/portafolio/festivalCineEuropeo.png');
    card3 = new Card('Hector Herrera','./imgs/portafolio/hectorHerrera.jpg');
    card4 = new Card('intel Segur','./imgs/portafolio/intelsegur-pagina-seo.jpg');

    $(card1).addClass('cards');
    $(card2).addClass('cards');
    $(card3).addClass('cards');
    $(card4).addClass('cards');

    let cards = [card1,card2,card3,card4];

    windowEmerge = new WindowEmerge(30,'right','ventanaEmergente','Portafolio','<span class="icon-x-circle"></span>',
    cards);

    windowEmerge.darAltura($(window).height());

    $(window).on('resize', function(){
        if($(this).height() != windowEmerge.height){
           windowEmerge.darAltura($(this).height());
           
        }
    });

    $('.desplegar-btn').click(function(){
        if(WindowEmerge.state == 1){
            return;
            
        }else{
            windowEmerge.darId();
            // windowEmerge.darAncho();
            windowEmerge.darDireccion();
            windowEmerge.atenuar();
            windowEmerge.superPoner();
            windowEmerge.show('#secundario');
            WindowEmerge.state = 1  
        }
        
        $('#btn-close').click(function(){

                WindowEmerge.state = 0;
                $(windowEmerge.tag).animate({width:"0"},'slow');
                function deleteElement(){
                    $(windowEmerge.tag).remove();
                }
                setTimeout(deleteElement,600);
                windowEmerge.desAtenuar();
            });

    });

    

    

    console.log(windowEmerge.height);
})
