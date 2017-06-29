function Paddle(gameid, playerid, document){

    this.gameBoard = $(gameid);
    this.player = $(playerid);
    this.document = $(document);
    this.left = 37;
    this.right = 39;
    this.document.keypress(function(event){
        console.log(event);
    });

}