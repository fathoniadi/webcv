var audio;
var playlist;
var tracks;
var current;

init();
function init(){
    current = 0;
    audio = $('#audio');
    playlist = $('#playlist');
    $(document).on('click','#mute',function(e)
    {
        e.preventDefault();
        audio[0].volume=0;
        $(this).replaceWith('<a id="muted" href="">UnMute</a>');
    });
    $(document).on('click','#muted',function(e)
    {
        e.preventDefault();
        audio[0].volume=1;
        $(this).replaceWith('<a id="mute" href="">Mute</a>');
    });
    tracks = playlist.find('li a');
    len = tracks.length;
    audio[0].volume = 1;
    audio[0].play();
    var music = tracks.attr('href');
    music = music.replace('.mp3','');
    music = music.replace('uploads/music/','');
    $('#footer-music').text(music);
    playlist.find('.playlist-content').click(function(e){
        e.preventDefault();
        link = $(this);
        current = link.parent().index();
    });
    audio[0].addEventListener('ended',function(e){ 
        current++;
        if(current == len){
            current = 0;
            link = playlist.find('.playlist-content')[0];
        }else{
            link = playlist.find('.playlist-content')[current];    
        }
        run($(link),audio[0]);
});
}
function run(link, player){
        player.src = link.attr('href');
        par = link.parent();
        par.addClass('active').siblings().removeClass('active');
        audio[0].load();
        audio[0].play();
        //alert(link.attr('href'));
        var music = link.attr('href');
        music = music.replace('.mp3','');
        music = music.replace('uploads/music/','');
        $('#footer-music').text(music);
}