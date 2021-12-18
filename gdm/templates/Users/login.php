


<?= $this->Html->css(['color/style.css']); ?>


<div class="login-page">
  <div class="form">
    <!-- <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form> -->

    
    <?= $this->Flash->render() ?>
    <h3>MyGDM Login</h3>
    <?= $this->Form->create() ?>
      
      <fieldset>
        <br>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
      <br>
    <?= $this->Form->button('login'); ?>
    <?= $this->Form->end() ?>
    
    
  </div>
</div>