class WindowEmerge{

    static state;

    constructor(width,direccion,id,title,iconClose,cards){
        
        this.id = id;
        this.title = document.createElement('h1');
        this.title.innerHTML = title;
        $(this.title).attr('id','tituloWemerge');
        this.contenedor = document.createElement('div');
        this.superContainerClose = document.createElement('div');
        $(this.superContainerClose).attr('id','superContainerClose');
        this.containerClose = document.createElement('div');
        $(this.containerClose).attr('id','containerClose');
        this.close = document.createElement('div');
        $(this.close).attr('id','btn-close');
        $(this.close).append(iconClose);
        this.width = width;
        this.direccion = direccion;
        this.height = $(window).height();
        this.tag = document.createElement('div');

        $(this.contenedor).append(this.title);

        for (var i = 0; i < cards.length; i++) {
            $(this.contenedor).append(cards[i]);
        }

        $(this.containerClose).append(this.close);
        $(this.superContainerClose).append(this.containerClose);
        $(this.contenedor).append(this.superContainerClose);
        $(this.contenedor).attr('id','contenedorCards');

        $(this.tag).append(this.contenedor);
    }
    
    // METODOS DE CONSULTA

    getWidth(){
        document.write("El ancho es: "+ this.width);
    }

    getDireccion(){
        document.write('La direccion es: '+ this.direccion);
    }

    getHeight(){
        document.write("El alto es: "+this.height);
    }

    info(){

        var salida = "el ancho es: " + this.width + "<br>";
        salida += "la direccion es: " + this.direccion + "<br>";
        salida += "el alto es: " + this.height;
        document.write(salida);

    }

    // METODOS MODIFICADORES

    setWidth(width){
        if (typeof(width) !== "number" ){
            alert('No has introducido un valor valido, vuelve a intentarlo');
            return;
        }else{
            this.width = width;
        }
    }
    
    setDireccion(direccion){
    
        if (typeof(direccion) !== "string"){

                alert('No has introducido un valor valido, vuelve a intentarlo');
                return;        
            
        }else{
            var direccion = direccion.toUpperCase();
            if (direccion == "LEFT" || direccion == "RIGHT" || direccion == "TOP" || direccion == "BOTTOM") {
                this.direccion = direccion;
               
            }else{
                alert('No has introducido un valor valido, vuelve a intentarlo');
                return;
            }
            
        }
    }

    // METODOS

    darColor(color){
        $(this.tag).css('background-color',color);
    }

    darAltura(height){
        $(this.tag).css('height',height);
    }

    darDireccion(){
        $(this.tag).css('position','fixed');
        if(this.direccion.toUpperCase() == 'LEFT'){
            $(this.tag).css('left','0');
        }else{
            if (this.direccion.toUpperCase() == 'RIGHT') {
                $(this.tag).css('right','0');
            }
            if (this.direccion.toUpperCase() == 'TOP') {
                $(this.tag).css('top','0');
            }
            if(this.direccion.toUpperCase() == 'BOTTOM'){
                $(this.tag).css('bottom','0');
            }
        }
        
    }

    darId(){
        $(this.tag).attr('id',this.id);
    }

    atenuar(){
        $('#principal').css('opacity','0.4');
    }

    desAtenuar(){
        $('#principal').css('opacity','1');
    }

    superPoner(){
        $('#ventanaEmergente').css('z-index','2');
    }
    
    show(where){
        if ($(window).width() < 767) {
            console.log($(window).width());
            $(where).append($(this.tag).animate({width:"100%"},'slow'));
        }else{
            $(where).append($(this.tag).animate({width:this.width+"%"},'slow'));
            this.state = 1; 
        }
    }

    delete(){
        $('#ventanaEmergente').remove();
    }
}