<section id="appointment" class="appointment section-bg">
  <!-- Appointment content -->
  <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Qəbula yazılmaq / Qeydiyyatdan keçmək</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up"
          data-aos-delay="100">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Ad Soyad" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="e-mail ünvanı" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Mobil nömrə" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Tarix" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Şöbəni seçin</option>
                <option value="Department 1">Şöbə 1</option>
                <option value="Department 2">Şöbə 2</option>
                <option value="Department 3">Şöbə 3</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Həkimi seçin</option>
                <option value="Doctor 1">Həkim 1</option>
                <option value="Doctor 2">Həkim 2</option>
                <option value="Doctor 3">Həkim 3</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Sorğunuz qeydə alındı. Təşəkkür edirik!</div>
          </div>
          <div class="text-center"><button type="submit">Qeydiyyatdan keç</button></div>
        </form>

      </div>
</section>
