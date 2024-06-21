document.addEventListener('DOMContentLoaded', function(){
	iniciarApp();
})

function iniciarApp(){
	if(!document.querySelector("#OtherPage")){
		scrollNav();
		navegacionFija()
	}
	if(document.querySelector(".register-page")) changeInputContact()
}

function changeInputContact(){
	const formContact = document.querySelectorAll("div#formContact input[name=contact]")
	const sectionContact = document.querySelector("#sectionContact")
	formContact.forEach(input => {
		input.addEventListener("click", function(ev){
			sectionContact.innerHTML = ""
			if(ev.target.value === "email"){

				sectionContact.innerHTML = `
					<input type="email" name="email" id="email" placeholder="Tu email" class="input-email">
				`
			}else if(ev.target.value === "telephono"){
				sectionContact.innerHTML = `
					<input type="number" name="phone" id="phone" placeholder="Tu n° de teléfono" class="input-telephono">
					<p class="sectionTelephono-smallText">Elija la fecha y la hora para ser contactado:</p>
					<div class="register-field">
						<label for="fecha">Fecha</label>
						<input type="date" name="fecha" id="fecha">
					</div>
					<div class="register-field">
						<label for="hora">Hora</label>
						<input type="time" name="hora" id="hora">
					</div>
				`

			}
		})
	})
}

function scrollNav(){
	const enlaces = document.querySelectorAll(".Navigation ul li a");
	enlaces.forEach((enlace) => {
		enlace.addEventListener("click", function(e){
			e.preventDefault();
			const seccionScroll = e.target.attributes.href.value;
			const seccion = document.querySelector(seccionScroll);
			seccion.scrollIntoView({behavior: "smooth"});
		});
	});

	document.querySelector(".Header-logo").addEventListener("click", function(e){
		e.preventDefault()
		console.log(e)
		const seccionScroll = e.target.parentElement.attributes.href.value;
		const seccion = document.querySelector(seccionScroll);
		seccion.scrollIntoView({behavior: "smooth"});
	})
}

function navegacionFija(){
	const barra = document.querySelector(".Header");
	const sobreFestival = document.querySelector(".Slogan");
	const body = document.querySelector('body');

	window.addEventListener("scroll", function(e){
		//console.log(sobreFestival.getBoundingClientRect().top);

		if(sobreFestival.getBoundingClientRect().top < 0){
			barra.classList.add("fijo");
			body.classList.add('body-scroll');
		}else{
			barra.classList.remove("fijo");
			body.classList.remove('body-scroll');
		}
	})
}

const navigation = document.querySelector("#navigation"),
	btnMobile = document.querySelector("#btnMobile"),
	header = document.querySelector("#header")



btnMobile.addEventListener("click", function(){
	//header.classList.toggle("header-alto-mb")


	if(navigation.style.maxHeight === "500px"){
		navigation.style.maxHeight = "0px";
		header.querySelector(".Header-contenedor").style.borderBottom = "0"
		header.querySelector(".Header-contenedor").style.paddingBottom = "0"
	}else{
		header.querySelector(".Header-contenedor").style.borderBottom = "1px solid #d7d7d7"
		header.querySelector(".Header-contenedor").style.paddingBottom = ".8rem"

		navigation.style.maxHeight = "500px";
		navigation.style.transition = "max-height 0.25s ease-in"

	}
	/*max-height: 500px;
	transition: max-height 0.25s ease-in;*/
})