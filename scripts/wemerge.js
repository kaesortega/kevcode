$(document).ready(function(){
    $('.desplegar-btn').click(function(){

        if (State.id == 1) {
            return;
        }else{
            div = document.createElement('div');
            h1 = document.createElement('h1');
            h1.innerHTML = 'Portafolio';

                // containerParent = div;
                // containerParent.addClass('containerPadre');

                containerHijo1 = document.createElement('div');
                $(containerHijo1).addClass('containersHijos');
                p = document.createElement('p');
                p.innerHTML = 'MetropoliMx';
                img = document.createElement('img');
                $(containerHijo1).append(p);
                $(containerHijo1).append($(img).attr('src','./imgs/portafolio/metropolimxpagina.jpg'));
                
                containerHijo2 = document.createElement('div');
                $(containerHijo2).addClass('containersHijos');
                p2 = document.createElement('p');
                p2.innerHTML = 'Herrera Web Site';
                img2 = document.createElement('img');
                $(containerHijo2).append(p2);
                $(containerHijo2).append($(img2).attr('src','./imgs/portafolio/hectorHerrera.jpg'));
                
                containerHijo3 = document.createElement('div');
                $(containerHijo3).addClass('containersHijos');
                p3 = document.createElement('p');
                p3.innerHTML = 'intelsegur-pagina-seo';
                img3 = document.createElement('img');
                $(containerHijo3).append(p3);
                $(containerHijo3).append($(img3).attr('src','./imgs/portafolio/intelsegur-pagina-seo.jpg'));

                containerHijo4 = document.createElement('div');
                $(containerHijo4).addClass('containersHijos');
                p4 = document.createElement('p');
                p4.innerHTML = 'intelsegur-pagina-seo';
                img4 = document.createElement('img');
                $(containerHijo4).append(p4);
                $(containerHijo4).append($(img4).attr('src','./imgs/portafolio/festivalCineEuropeo.png'));

            btnRepliegue = document.createElement('button');
            btnRepliegue.innerHTML = 'Replegar';
            btnRepliegue = $(btnRepliegue).attr('id','repliegue');


            containerParent = document.createElement('div');
            $(containerParent).addClass('containerPadre');

            $(div).append(h1);

            $(containerParent).append(containerHijo1);
            $(containerParent).append(containerHijo2);
            $(containerParent).append(containerHijo3);
            containerParent = $(containerParent).append(containerHijo4);

            $(div).append(containerParent);

            $(div).append(btnRepliegue);

            
            
            div = $(div).addClass('windowParent');

            altoScreen = $(window).height();
            anchoScreen = $(window).width();
            if(anchoScreen < 767){
                div.animate({width:"100%"},'slow');
            }else{
                div.animate({width:"30%"},'slow');
                
            }
            div.css('height',altoScreen);
            console.log(div[0]);

            
            $('#principal').append(div[0]);
        }


        State.id = 1;
        console.log(State.id); // borrar

        
        
        $(btnRepliegue).click(function(){
            State.id = 0;
            div.animate({width:"0"},'slow');
        
            if(prueba[0] == undefined ){
            console.log('error')
            }else{
                console.log(prueba[0]);
                function deleteElement(){
                    $('.windowParent').remove();
                }
                setTimeout(deleteElement,1000);
            }
        })

        console.log($('#desplegar-btn').idClick);
        prueba = $(document).find('.windowParent');
        
        
    });
});
