@extends('layout.main')

@section('main')
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Berikut merupakan beberapa skill yang saya miliki</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">Premiere Pro <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Adobe Photoshop <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            
            <div class="progress">
              <span class="skill">Adobe After Effect <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            
        </div>
        
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            
            <div class="progress">
                <span class="skill">Games <i class="val">89%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            
            <div class="progress">
                <span class="skill">Programming<i class="val">67%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="progress">
                <span class="skill">Copywriting <i class="val">86%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            
        </div>
        
    </div>

      </div>
    </section><!-- End Skills Section -->

    @endsection