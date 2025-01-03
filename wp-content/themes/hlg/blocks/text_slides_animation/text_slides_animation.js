const text_slides_animation = () => {
    
  const text_slides_animation_parent = document.querySelector('.text_slides_animation_parent')

  if(!text_slides_animation_parent) return

  class LoopingElement {
      constructor(element, currentTranslation, speed, rtl) {
          this.element = element;
          this.currentTranslation = currentTranslation;
          this.speed = speed;
          this.direction = true;
          this.scrollTop = 0;
          this.metric = 100;
          this.rtl = rtl;

          // Initialize the linear interpolation object (lerp)
          this.lerp = {
              current: this.currentTranslation,
              target: this.currentTranslation,
              ease: 0.2 // Initial ease factor for the interpolation
          };

          this.events();
          this.render();
      }

      events() {
          const scrollHandler = (e) => {
              let direction = window.pageYOffset || document.documentElement.scrollTop;
              if (this.rtl) {
                  if (direction > this.scrollTop) {
                      this.direction = false;
                      this.lerp.target -= this.speed * 6;
                  } else {
                    this.direction = false;
                    this.lerp.target -= this.speed * 6;
                  }
              } else {
                  if (direction > this.scrollTop) {
                      this.direction = true;
                      this.lerp.target += this.speed * 6;
                  } else {
                    this.direction = true;
                    this.lerp.target += this.speed * 6;
                  }
              }
              this.scrollTop = direction <= 0 ? 0 : direction;
          };

           // Check for touch capabilities as an additional measure
            if ('ontouchstart' in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0) {
                return;
            } else {
                window.addEventListener("scroll", scrollHandler);
            }
          
      }

      lerpFunc(current, target, ease) {
          this.lerp.current = current * (1 - ease) + target * ease;
      }

      right() {
          this.lerp.target += this.speed;
          if (this.lerp.target > this.metric) {
              this.lerp.current -= this.metric * 2;
              this.lerp.target -= this.metric * 2;
          }
      }

      left() {
          this.lerp.target -= this.speed;
          if (this.lerp.target < -this.metric) {
              this.lerp.current -= -this.metric * 2;
              this.lerp.target -= -this.metric * 2;
          }
      }

      animate() {
          // Move in opposite directions based on rtl flag
        if (this.rtl) {
            this.left();
        } else {
            this.right();
        }
          this.lerpFunc(this.lerp.current, this.lerp.target, this.lerp.ease);

          // Dynamically adjust the ease based on speed
          this.lerp.ease = Math.min(0.1, 0.01 / this.speed);

          this.element.style.transform = `translateX(${this.lerp.current}%)`;
      }

      render() {
          this.animate();
          window.requestAnimationFrame(() => this.render());
      }
  }


  let imagesArray = document.querySelectorAll(".animation_wrapper_top");
  new LoopingElement(imagesArray[0], 0, 0.02);
  new LoopingElement(imagesArray[1], -100, 0.02);

  let imagesArrayBottom = document.querySelectorAll(".animation_wrapper_bottom");
  new LoopingElement(imagesArrayBottom[0], 0, 0.02, true);
  new LoopingElement(imagesArrayBottom[1], -100, 0.02, true);
};

window.addEventListener('DOMContentLoaded', text_slides_animation);
