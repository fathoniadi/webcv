$(document).on('click','#new-portofolio',function(){
	$('.new-portofolio-content').css('display','block');
});
$(document).on('click','.portofolio-form-close',function(){
	$('.new-portofolio-content').css('display','none');
});

$(document).on('click','#new-hobby',function(){
    $('.new-hobby-content').css('display','block');
});
$(document).on('click','.hobby-form-close',function(){
    $('.new-hobby-content').css('display','none');
});

$(document).on('submit','#add-portofolio',function(e) {
        e.preventDefault();
       	var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url:'addportofolio' ,
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log("success");
                console.log(data);
                $('#content').load('dashboard/Dportofolio');
            },
            error: function(data){
                console.log("error");
                console.log(data);
                $('#content').load('dashboard/Dportofolio');
            }
        });
    });


$(document).on('submit','#add-hobby',function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url:'addhobby' ,
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log("success");
                console.log(data);
                $('#content').load('dashboard/Dhobby');
            },
            error: function(data){
                console.log("error");
                console.log(data);
                $('#content').load('dashboard/Dhobby');
            }
        });
    });

$(document).on('submit','#edit-portofolio',function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type:'POST',
            url:'ep' ,
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log("success");
                console.log(data);
                //$('#content').load('dashboard/Dportofolio');
                window.location.hash = "#/dashboard/Dportofolio";
            },
            error: function(data){
                console.log("error");
                console.log(data);
                //$('#content').load('dashboard/Dportofolio');
                window.location.hash = "#/dashboard/Dportofolio";
            }
        });
    });


$(document).on('click','.deletePortofolio',function(){

	if(confirm('Apa anda yakin akan menghapus ini?'))
	{
		var id = $(this).attr('id');
		$.ajax({
		type:'POST',
		url:'deleteportofolio',
		data:'id='+id,
		success:function(response){
				console.log(response);
				$('#content').load('dashboard/Dportofolio');
			}
		});
		
	}
	else
	{
		alert("PHP!");
	}
});

$(document).on('click','.deletehobby',function(){

    if(confirm('Apa anda yakin akan menghapus ini?'))
    {
        var id = $(this).attr('this-id');
        $.ajax({
        type:'POST',
        url:'deletehobby',
        data:'id='+id,
        success:function(response){
                console.log(response);
                $('#content').load('hobby');
            }
        });
        
    }
    else
    {
        alert("PHP!");
    }
});



$(document).on('click','.editPortofolio',function(e)
{
    e.preventDefault();
    var id = $(this).attr('id');
    //alert(id);
    $.ajax({
        type:'POST',
        url:'dashboard/editp',
        data:'ip='+id,
        success:function(response){
               //$($.parseHTML(response, document, true)).("#content");
               window.location.hash = "#/dashboard/editp";
            }
        });
});

$(document).on('click','#deleteimg', function(e){
    e.preventDefault();
    $('#img').html('<input required="" style="display:inline" id="portofolio-img" type="file" name="portofolio-img">');
});