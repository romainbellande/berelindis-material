<section id="contact" class="section">
  <h2>contact</h2>
  <div class="container horizontal layout center ">
    <paper-card>
      <form is="iron-form" id="form" method="post" action="#">
        <paper-input name="mail" label="Mail" required></paper-input>
        <div id="name" class="horizontal around-justified layout">
          <paper-input name="firstname" label="Prénom" required></paper-input>
          <paper-input name="lastname" label="Nom" required></paper-input>
        </div>
        <paper-textarea name="message" label="Message (Auto resize)" required></paper-textarea>
        <paper-button raised>Envoyer</paper-button>
      </form>
    </paper-card>
  </div>
</section>
