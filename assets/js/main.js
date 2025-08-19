class main{
    constructor(){
        this.bindEvents();
    }

    bindEvents(){
        jQuery("#search").keyup(function (e) { 
            
        });
    }

    search(){
        jQuery.ajax({
            type: "POST",
            
        });
    }
}
jQuery(() => new main());