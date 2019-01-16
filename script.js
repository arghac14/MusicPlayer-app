
function createPlaylist(){
    var e1=document.getElementById('mainpage');
	var e2=document.getElementById('createPlaylistPage');
    e1.style.display="none";
    e2.style.display="block"; 
}
function openPlaylist(){
    var e1=document.getElementById('mainpage');
	var e2=document.getElementById('createPlaylistPage');
    var e3=document.getElementById('openPlaylistPage');
    e1.style.display="none";
    e2.style.display="none";
    e3.style.display="none";
    window.location.href="createPage.php";
}
