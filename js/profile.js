const liItem = document.querySelectorAll('ul li');
const imgItem = document.querySelectorAll('.courses_offered div');

liItem.forEach(li => {
	li.onclick = function(event){
		event.preventDefault();
		liItem.forEach(li => {
			li.className = "";
		})
		li.className = "active";
	const value = li.textContent;
	imgItem.forEach(img => {
		img.style.display = 'none';
		if(img.getAttribute('data-filter') == value.toLowerCase() || value == "All"){
			img.style.display = 'block';
		}
	})
	}
});


window.onload=function(){
	var funct = new XMLHttpRequest();
	funct.open("GET","profile.php", true);
	funct.onload=function(){
		if(funct.readyState === 4 && funct.status === 200){
			var data = JSON.parse(funct.responseText);
			if(data.length>0){
			document.getElementById("fname").value = data[0].fname;
        document.getElementById("lname").value = data[0].lname;
        document.getElementById("title").value = data[0].title;
        document.getElementById("email").value = data[0].email;
        document.getElementById("bio").value = data[0].bio;

        // Replace input tags with display tags
        document.getElementById("fname").outerHTML = "<p class='display' id='fname'>" + data[0].fname + "</p>";
        document.getElementById("lname").outerHTML = "<p class='display' id='lname'>" + data[0].lname + "</p>";
        document.getElementById("title").outerHTML = "<p class='display' id='title'>" + data[0].title + "</p>";
        document.getElementById("email").outerHTML = "<p class='display' id='email'>" + data[0].email + "</p>";
        document.getElementById("bio").outerHTML = "<h5 class='display' id='bio'>" + data[0].bio + "</h5>";
      }
    }
  };
  funct.send();
};