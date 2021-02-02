class Card{
    constructor(titulo,srcImg) {
        this.container = document.createElement('div');

        var title = document.createElement('p');
        title.innerHTML = titulo;
        this.titleCard = title;

        var img = document.createElement('img');
        this.img = $(img).attr('src',srcImg);


        $(this.container).append(this.titleCard);
        var card = $(this.container).append(this.img);
        
        return card;
    }
}