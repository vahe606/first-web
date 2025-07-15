// smooth scroll
$(document).ready(function(){
    $(".navbar .nav-link").on('click', function(event) {

        if (this.hash !== "") {

            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 700, function(){
                window.location.hash = hash;
            });
        } 
    });
});

// protfolio filters
$(window).on("load", function() {
    var t = $(".portfolio-container");
    t.isotope({
        filter: ".new",
        animationOptions: {
            duration: 750,
            easing: "linear",
            queue: !1
        }
    }), $(".filters a").click(function() {
        $(".filters .active").removeClass("active"), $(this).addClass("active");
        var i = $(this).attr("data-filter");
        return t.isotope({
            filter: i,
            animationOptions: {
                duration: 750,
                easing: "linear",
                queue: !1
            }
        }), !1
    });
});


// google maps
function initMap() {
// Styles a map in night mode.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 40.674, lng: -73.945},
        zoom: 12,
        scrollwheel:  false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
      styles: [
        {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
        {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
        {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
        {
          featureType: 'administrative.locality',
          elementType: 'labels.text.fill',
          stylers: [{color: '#d59563'}]
        },
        {
          featureType: 'poi',
          elementType: 'labels.text.fill',
          stylers: [{color: '#d59563'}]
        },
        {
          featureType: 'poi.park',
          elementType: 'geometry',
          stylers: [{color: '#263c3f'}]
        },
        {
          featureType: 'poi.park',
          elementType: 'labels.text.fill',
          stylers: [{color: '#6b9a76'}]
        },
        {
          featureType: 'road',
          elementType: 'geometry',
          stylers: [{color: '#38414e'}]
        },
        {
          featureType: 'road',
          elementType: 'geometry.stroke',
          stylers: [{color: '#212a37'}]
        },
        {
          featureType: 'road',
          elementType: 'labels.text.fill',
          stylers: [{color: '#9ca5b3'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'geometry',
          stylers: [{color: '#746855'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'geometry.stroke',
          stylers: [{color: '#1f2835'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'labels.text.fill',
          stylers: [{color: '#f3d19c'}]
        },
        {
          featureType: 'transit',
          elementType: 'geometry',
          stylers: [{color: '#2f3948'}]
        },
        {
          featureType: 'transit.station',
          elementType: 'labels.text.fill',
          stylers: [{color: '#d59563'}]
        },
        {
          featureType: 'water',
          elementType: 'geometry',
          stylers: [{color: '#17263c'}]
        },
        {
          featureType: 'water',
          elementType: 'labels.text.fill',
          stylers: [{color: '#515c6d'}]
        },
        {
          featureType: 'water',
          elementType: 'labels.text.stroke',
          stylers: [{color: '#17263c'}]
        },
      ]
    });
}











          //               SLIDER JS PICE

$(".slider")
  .slick({
    autoplay: true,
    speed: 800,
    lazyLoad: "progressive",
    arrows: true,
    dots: false,
    prevArrow:
      '<div class="slick-nav prev-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
    nextArrow:
      '<div class="slick-nav next-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>'
  })
  .slickAnimation();

$(".slick-nav").on("click touch", function (e) {
  e.preventDefault();

  let arrow = $(this);

  if (!arrow.hasClass("animate")) {
    arrow.addClass("animate");
    setTimeout(() => {
      arrow.removeClass("animate");
    }, 1600);
  }
});


const yes=document.querySelectorAll('.yes')
yes.forEach( (dlo)=>{
  dlo.checked=true
})


              // Wokr-Psace


const inp1= document.querySelector('.i1')
const tpich= document.querySelector('.tpich')
inp1.addEventListener("keyup", (e)=>{
   let txt1=e.target.value
   let data=new FormData()
   data.append('t1',txt1)
   fetch('action.php',{
    method:'POST',
    body:data
   }).then((response)=>{
    return response.text()
   }).then((data)=>{
   
    tpich.innerHTML=data
   })

});
const del=document.querySelectorAll('.del')
del.forEach((dlo)=>{
  dlo.addEventListener('click', (arg)=>{
    let parent=arg.target.parentElement.parentElement
    let src=parent.querySelector('img').getAttribute('src')
    let table=arg.target.getAttribute('data-tab')
    parent.style.display='none';
    let id= arg.target.id
    let dat=new FormData()
    dat.append('delete_id',id)
    dat.append('table_nm',table)
    dat.append('img_s',src)

  fetch('action.php',{
      method:'POST',
      body:dat
    })
  })

});
const flo=document.querySelectorAll('.f1')
flo.forEach((dlo)=>{
  dlo.addEventListener('change',(e)=>{
    let parent=e.target.offsetParent
    let trip=e.target.getAttribute('data-trip')
    let data=new FormData()
    data.append('flo2',e.target.files[0])
    data.append('trip',trip)
    fetch('action.php',{
      method:'POST',
      body:data
    }).then((response)=>{
      return response.text()
    }).then((data)=>{
       parent.querySelector('.len').innerHTML = `<img src="assets/${trip}/${data}" widht='300px'>` 
       parent.querySelector('.i3').value = data
    })
  })
} );

const del_slide=document.querySelector('.del_slide')
const mv_trash=document.querySelector('.mv_trash')
const port=document.querySelectorAll('.port_btn')
const slide_right=document.querySelector('.slidebar-right')
port.forEach((dlo)=>{
  dlo.addEventListener('click', (e)=>{
    let pr=e.target.offsetParent
    let id_1=e.target.parentElement.querySelector('.id_form').value
    let txt1=pr.querySelector('.title').innerHTML
    let txt2=pr.querySelector('.subtitle').innerHTML
    let img=pr.querySelector('img').getAttribute('src')
    mv_trash.style.right='-100%';
    slide_right.style.right='0';
    slide_right.innerHTML=`
      <button class="btn btn-close close" onclick="fn1(this)"><i class="ti-hand-point-right icon_slide"></i></button>
      <button class="btn del_slide close" onclick="fn2(this)">Del</button>
    <form action="orders.php" method="post">
      <div class="form_right">
        <img src="${img}" width="250px">
        <h6>${txt1}</h6>
        <p>${txt2}</p>
        <input type="hidden" name="id" value="${id_1}" >
      </div>
      <button class="slidebar_sub">OK</button>
    </form>
    `

  })
})
mv_trash.addEventListener('click',(dlo)=>{
  slide_right.style.right="0";
})
function fn1(e){
    // let parent=e.target.parentElement
    slide_right.style.right='-100%';
    mv_trash.style.right='0';
}
function fn2(e){
    mv_trash.style.right='-100%';
    slide_right.style.right='-100%';
}

const new_cl=document.querySelectorAll('.news_click')
function rem() {
  new_cl.forEach((dl)=>{
    dl.classList.remove('active-page')
  })
}
new_cl.forEach((a)=>{
  a.addEventListener('click', (e)=>{
    let number=e.target.innerText
    let data=new FormData()
    rem()
    e.target.classList.add('active-page')
    data.append('num',number)

    fetch('action.php',{
       method:'POST',
      body:data
    }).then((response)=>{
      return response.text()
    }).then((data)=>{
      tpich.innerHTML=data
    })
  })
})

const tpel=document.querySelector('.tpel')
const submit_btn=document.querySelector('.sub_btn1')
submit_btn.addEventListener('click',(e)=>{
  e.preventDefault()
  let name=document.querySelector('.name_inp').value
  let email=document.querySelector('.email_inp').value
  let text_ar=document.querySelector('.textar_inp').value
  let data=new FormData();
  data.append('username',name);
  data.append('email',email);
  data.append('slug',text_ar);
  fetch('contact.php',{
    method:'POST',
    body:data
  }).then((response)=>{
    return response.text()
  }).then((data)=>{
    // tpel.innerHTML=data
    if (data=='true') {
      tpel.innerHTML=`
  <div class="alert alert-success">
    <strong>Success!</strong> Indicates a successful or positive action.
  </div>
       `
    }else if(data=='false'){
    tpel.innerHTML=`
  <div class="alert alert-danger">
    <strong>Dangerous!</strong> Indicates a danger action.
  </div>
       `
    };
    
  });
})

const inputs = document.querySelectorAll('.input_val');


const patterns = {
  username: /^[a-z\d]{5,12}$/i,
  email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
  slug: /^[a-z\d-]{8,}$/i,
};

const validate = (field, regex) => {
  const valid = regex.test(field.value);
  if (valid) {
    field.classList.add('valid');
     field.classList.remove('invalid');
  } else {
    field.classList.add('invalid');
       field.classList.remove('valid');
  }
};

inputs.forEach((input) => {
  input.addEventListener('keyup', (e) => {
    validate(e.target, patterns[e.target.attributes.name.value]);
  });
});


const conts=document.querySelector('.lcnox')
var blog_txt=document.querySelector('.blog_input')
blog_txt.addEventListener('input', (e)=>{
let all="";
if (blog_txt.value.length==0) {
  conts.innerHTML='---> Coutry is empty';
}else{
  fetch(`http://api.weatherapi.com/v1/current.json?key=c9207861b59d46a58bc61947232212&q=${blog_txt.value}&aqi=no`)
  .then(response => response.json())
  .then(data =>{


      all+=`
      <div class="blog-row">
        <div class="img-blog"></div>
        <div class="text-content">
          <div class="blog-title">${data.current.temp_c}</div>
            <div class="blog-title">${data.location.country}</div>
            <div class="blog-title">${data.location.localtime}</div>
        </div>
      </div>  
       `
       
    conts.innerHTML=all

    // console.log(data)
  })
}

})




