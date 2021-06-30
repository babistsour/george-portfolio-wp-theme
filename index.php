

<?php get_header(); ?>


<!--###################################### HERO ######################################-->
      <section class="hero" id="hero">
        <div class="headings">
          <h1 class="hide">
            <span class="text">Hello.</span>
          </h1>
          <br />
          <h1 class="hide">
            <span class="text george">I am George.</span> 
            
            
          </h1>
          <h2 class="yellow__heading hide">
            <span class="text">graphic designer&<br />art director</></span> 
          <h2/>
        </div>
        <div class="content">
          <p>
            Hello, I’m George—a designer creating meaningful experiences within print and digital contexts. My work balances
            distinction with familiarity, an eye for detail with a playful soul. Contact me for collaborations or just to say hi!
          </p>
          <a href="#contact" class="btn">CONTACT</a>
        </div>
        <div class="vertical__social">
          <a href="https://www.facebook.com/giorgos.siakavaras.7" class="social" target="_blank">facebook</a>
          <a href="https://www.instagram.com/geo_siak/?hl=en" class="social" target="_blank">instagram</a>
          <a href="https://gr.linkedin.com/in/giorgos-siakavaras-98b093152" class="social" target="_blank">linkedin</a>
        </div>
      </section>

      <!-- ################################### projects  #####################################-->

      <section class="projects" id="projects">
        <h1 class="section__title">
          <span class="yolo">SELECTED</span>
          <br />
          <span class="yolo">PROJECTS</span>
        </h1>
        <div class="line"></div>
        <div class="figures__container">
            
            <?php
            $i=0;
            while(have_posts()) : the_post();
            $i++; ?>
            <div class="figure">
                <h1 class="project__number"><span class="number"><?php echo $i; ?>/</span></h1>
                <div class="description perigrafi">
                <h3 class="perigrafi">
                    <a href="<?php echo get_the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
                </h3>
                <p class="perigrafi"><?php the_excerpt(); ?></p>
                </div>
                <figure>
                <img src="<?php echo get_the_post_thumbnail_url (); ?>">
                <figcaption>
                    <h3> <a href="<?php echo get_the_permalink(); ?>">
                    <?php the_title(); ?>
                  </h3>
                  <p class="perigrafi"><?php the_excerpt(); ?></p>
                    <img />
                </figcaption>
                </figure>
            </div>
          <div class="line"></div>
            <?php endwhile; ?>
            
            <!-- <div class="figure">
                <h1 class="project__number"><span class="number">02/</span></h1>
                <div class="description perigrafi">
                <h3 class="perigrafi">Baron-cafe</h3>
                <p class="perigrafi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, qui.</p>
                </div>
                <figure>
                <img src="<?php echo get_stylesheet_directory_uri();?>\images\104116227_10218091295062420_3676999121591263631_o.jpg" alt="project1" />
                <figcaption>
                    <h3>Baron-cafe</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, qui.</p>
                    <img />
                </figcaption>
                </figure>
          </div>
          <div class="line"></div>
            <div class="figure">
                <h1 class="project__number"><span class="number">03/</span></h1>
                <div class="description perigrafi">
                <h3 class="perigrafi">Baron-cafe</h3>
                <p class="perigrafi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, qui.</p>
                </div>
                <figure>
                <img src="<?php echo get_stylesheet_directory_uri();?>\images\104116227_10218091295062420_3676999121591263631_o.jpg" alt="project1" />
                <figcaption>
                    <h3>Baron-cafe</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, qui.</p>
                    <img />
                </figcaption>
                </figure>
          </div>
          <div class="line"></div>
            <div class="figure">
                <h1 class="project__number"><span class="number">04/</span></h1>
                <div class="description perigrafi">
                <h3 class="perigrafi">Baron-cafe</h3>
                <p class="perigrafi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, qui.</p>
                </div>
                <figure>
                <img src="<?php echo get_stylesheet_directory_uri();?>\images\104116227_10218091295062420_3676999121591263631_o.jpg" alt="project1" />
                <figcaption>
                    <h3>Baron-cafe</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, qui.</p>
                    <img />
                </figcaption>
                </figure>
          </div>
          <div class="line"></div>
            <div class="figure">
                <h1 class="project__number"><span class="number">05/</span></h1>
                <div class="description perigrafi">
                <h3 class="perigrafi">Baron-cafe</h3>
                <p class="perigrafi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, qui.</p>
                </div>
                <figure>
                <img src="<?php echo get_stylesheet_directory_uri();?>\images\104116227_10218091295062420_3676999121591263631_o.jpg" alt="project1" />
                <figcaption>
                    <h3>Baron-cafe</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, qui.</p>
                    <img />
                </figcaption>
                </figure>
          </div>
          <div class="line"></div>
            <div class="figure">
                <h1 class="project__number"><span class="number">06/</span></h1>
                <div class="description perigrafi">
                <h3 class="perigrafi">Baron-cafe</h3>
                <p class="perigrafi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, qui.</p>
                </div>
                <figure>
                <img src="<?php echo get_stylesheet_directory_uri();?>\images\104116227_10218091295062420_3676999121591263631_o.jpg" alt="project1" />
                <figcaption>
                    <h3>Baron-cafe</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, qui.</p>
                    <img />
                </figcaption>
                </figure>
          </div>
          <div class="line"></div>
        </div> -->
      </section>

      <!--############################ contact ###################################-->

      <section id="contact">
        <div class="contact">
          <h2 class="contact__title">
            Feel free to <span><a href="mailto:skoulikios@gmail.com" class="yellow">mail me</a></span> for<br />any project or<br />information.
          </h2>
          <div class="right__stuff">
            <div class="info">
              <a href="mailto:skoulikios@gmail.com" class="mail">george@gmail.com</a>
              <h3><i class="fas fa-map-marker-alt"></i>Trikala, Greece</h3>
              <h3><i class="fas fa-phone-alt"></i>Tel:+(30)<a href="tel:+306981915038">6981915038</a></h3>
            </div>

            <div class="media">
              <a href="https://www.facebook.com/giorgos.siakavaras.7" class="social" target="_blank"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="https://www.instagram.com/geo_siak/?hl=en" class="social" target="_blank"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="https://gr.linkedin.com/in/giorgos-siakavaras-98b093152" class="social" target="_blank"
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php wp_footer(); ?>

    <!-- <script type="text/javascript" src="<?=get_template_directory_uri();?>/js/main.js"></script> -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"
      integrity="sha512-1dalHDkG9EtcOmCnoCjiwQ/HEB5SDNqw8d4G2MKoNwjiwMNeBAkudsBCmSlMnXdsH8Bm0mOd3tl/6nL5y0bMaQ=="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.js"
      integrity="sha512-aFeKJduB8P/AbrNBl0SQOu5kyYjwrboPfouTkiQ8Wr8H3kmcO1W94KPlrgG/otCFwA0b2fNyBbEH0AJQDf1erQ=="
      crossorigin="anonymous"
    ></script>

    <!-- ####################################  aniimations ############################ -->
    <script>
      var tl = gsap.timeline();
      gsap.registerPlugin(ScrollTrigger);

      tl.to(" .text", { y: 0, duration: 1, stagger:0.2});
      

      tl.fromTo(
        ".content",

        {
          opacity: 0,
        },
        {
          opacity: 1,
          duration: 1.2,
          stagger: 0.5,
        }
      );

      
        

      gsap.to(".yolo", {
        scrollTrigger: ".yolo", // start the animation when ".box" enters the viewport (once)
        y: 0,
        duration: 1,
        stagger: 0.3,
        ease: "power1.out",
      });

      

       gsap.utils.toArray('figure').forEach(figure => {
        gsap.from(figure, {
        
        scrollTrigger: {
          trigger: figure,
          start: "top 50%",
          ease: "power1.out",
          
          
        },
        x:"100%",
        
        opacity:0,
        duration: 1.2,
        stagger: 1
      } 
      );
       })

       gsap.utils.toArray(".line").forEach(line => {
         gsap.to(line, {
           scrollTrigger: {
             trigger:line,
             ease:"power1.out"
           },
           width:"100%",
           duration: 2.5
         })
       });

       gsap.utils.toArray('.perigrafi').forEach(perigrafi => {
        gsap.from(perigrafi, {
        
        scrollTrigger: {
          trigger: perigrafi,
          
          ease: "power1.out",
          
          
        },
        xPercent: -5,
        
        opacity:0,
        duration: 2,
        stagger: 1.6
      } 
      );
       },'+=0.5')

       gsap.utils.toArray('.number').forEach(project => {
        gsap.to(project, {
        
        scrollTrigger: {
          trigger: project,
          delay:1,
          ease: "power1.out",
          
          
        },
        y:'0%',
        
        duration: 1,
        
      } 
      );
       },'+=0.5')
        
        

       
    </script>
  </body>
</html>
       

      

      
      

      
