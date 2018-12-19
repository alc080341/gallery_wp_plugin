
window.onload = function()
{

const current = document.querySelector('#currentImage');
const imgs = document.querySelectorAll('.imgs img');
const imgText = document.getElementById('imgText');
const opacity = 0.7;

//Set first image opacity

//imgs[0].style.opacity = opacity;

imgs.forEach(img => img.addEventListener('click', imgClick));

function imgClick(e) 
{


	//Reset the opacity of all images
	imgs.forEach(img => (img.style.opacity = 1));


	//Change current image to source of clicked image
	current.src = e.target.src;
	imgText.innerHTML = "<p>" + e.target.alt + "</p>";

	//Add fade in class
	current.classList.add('fade-in');

	//Remove class
	setTimeout(() => {current.classList.remove('fade-in');
	}, 1000);


	//Change opacity to var
	e.target.style.opacity = opacity;
	animateText();
}

function animateText()
{
	imgText.classList.remove('key-in-left');

	void imgText.offsetWidth;
	imgText.classList.add('key-in-left');

}

}