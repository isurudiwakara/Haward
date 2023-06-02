Vue.config.devtools = true;

Vue.component('card', {
  template: `
    <div class="card-wrap"
      @mousemove="handleMouseMove"
      @mouseenter="handleMouseEnter"
      @mouseleave="handleMouseLeave"
      ref="card">
      <div class="card"
        :style="cardStyle">
        <div class="card-bg" :style="[cardBgTransform, cardBgImage]"></div>
        <div class="card-info">
          <slot name="header"></slot>
          <slot name="content"></slot>
        </div>
      </div>
    </div>`,
  mounted() {
    this.width = this.$refs.card.offsetWidth;
    this.height = this.$refs.card.offsetHeight;
  },
  props: ['dataImage'],
  data: () => ({
    width: 0,
    height: 0,
    mouseX: 0,
    mouseY: 0,
    mouseLeaveDelay: null
  }),
  computed: {
    mousePX() {
      return this.mouseX / this.width;
    },
    mousePY() {
      return this.mouseY / this.height;
    },
    cardStyle() {
      const rX = this.mousePX * 30;
      const rY = this.mousePY * -30;
      return {
        transform: `rotateY(${rX}deg) rotateX(${rY}deg)`
      };
    },
    cardBgTransform() {
      const tX = this.mousePX * -40;
      const tY = this.mousePY * -40;
      return {
        transform: `translateX(${tX}px) translateY(${tY}px)`
      }
    },
    cardBgImage() {
      return {
        backgroundImage: `url(${this.dataImage})`
      }
    }
  },
  methods: {
    handleMouseMove(e) {
      this.mouseX = e.pageX - this.$refs.card.offsetLeft - this.width / 2;
      this.mouseY = e.pageY - this.$refs.card.offsetTop - this.height / 2;
    },
    handleMouseEnter() {
      clearTimeout(this.mouseLeaveDelay);
    },
    handleMouseLeave() {
      this.mouseLeaveDelay = setTimeout(() => {
        this.mouseX = 0;
        this.mouseY = 0;
      }, 1000);
    }
  }
});

const app = new Vue({
  el: '#app'
});





var elPrincipal;

window.addEventListener("load", function () {
  elDocumento = document.querySelector("body");
  elPrincipal = document.querySelector("main");

  altoPrincipal = elPrincipal.offsetHeight;
  elDocumento.style.height = altoPrincipal + "px";

  lasAnclas = document.querySelectorAll("p[id^='ancla']");
  totalAnclas = lasAnclas.length;

  for (a = 0; a < totalAnclas; a++) {
    nuevaAncla = document.createElement('div');
    nuevaAncla.setAttribute("id", "ancla" + a);
    nuevaAncla.style.top = lasAnclas[a].offsetTop + "px";
    elDocumento.appendChild(nuevaAncla);
    lasAnclas[a].removeAttribute("id");
  }
}, false);

document.addEventListener("scroll", function () {
  var scrollY = window.pageYOffset || document.documentElement.scrollTop;
  elPrincipal.style.transform = 'translateY(' + (-scrollY) + 'px)';
}, false);

function enableScroll() {
  document.querySelector('body').classList.remove('scroll-lock');
}

function disableScroll() {
  document.querySelector('body').classList.add('scroll-lock');
}





var bar_bg = document.getElementById("top-scrollbar-bg"),
    body = document.body,
    html = document.documentElement;

bar_bg.style.minWidth = document.width + "px";

document.getElementsByTagName("body")[0].onresize = function() {
    // Update the gradient width
    bar_bg.style.minWidth = document.width + "px";
}

window.onscroll = function() {
    // Change the width of the progress bar
    var bar = document.getElementById("top-scrollbar"),
        dw  = document.documentElement.clientWidth,
        dh  = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight ),
        wh  = window.innerHeight,
        pos = pageYOffset || (document.documentElement.clientHeight ?
                              document.documentElement.scrollTop : document.body.scrollTop),
        bw  = ((pos / (dh - wh)) * 100);

    bar.style.width = bw + "%";
}


function register(){


  var fname = document.getElementById("f").value;
  var lname = document.getElementById("l").value;
  var email = document.getElementById("e").value;
  var mobile = document.getElementById("m").value;
  var birthday = document.getElementById("b").value;
  var gender = document.getElementById("g").value;
  var course = document.getElementById("c").value;


  var f  = new FormData();

  f.append("f",fname);
  f.append("l",lname);
  f.append("e",email);
  f.append("m",mobile);
  f.append("b",birthday);
  f.append("g",gender);
  f.append("c",course);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function(){
    if(r.readyState == 4){
      var t = r.responseText;
      alert(t);
    }
  }

  r.open("POST","sendEmail.php",true);
  r.send(f);


}





