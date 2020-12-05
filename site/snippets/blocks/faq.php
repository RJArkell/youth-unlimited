<section>
  <div class="faqgrid">
    <div class="faq1">
      <h2 class="faqheader"><?= $data->heading()->html() ?></h2>
      <div class="faqtext"><?= $data->text()->html() ?></div>
      <a href="<?= $data->button()->toLinkObject() ?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
    </div>
    
    <div class="faq2 faqtabs">
      <div class="faqtab">
        <input type="checkbox" id="chck1" class="faqtabinput">
        <label class="faqtab-label faqquestion" for="chck1"><?= $data->question1()->html() ?></label>
        <div class="faqtab-content faqanswer"><?= $data->answer1()->kirbytext() ?></div>
      </div>
      <div class="faqtab">
        <input type="checkbox" id="chck2" class="faqtabinput">
        <label class="faqtab-label faqquestion" for="chck2"><?= $data->question2()->html() ?></label>
        <div class="faqtab-content faqanswer"><?= $data->answer2()->kirbytext() ?></div>
      </div>
      <div class="faqtab">
        <input type="checkbox" id="chck3" class="faqtabinput">
        <label class="faqtab-label faqquestion" for="chck3"><?= $data->question3()->html() ?></label>
        <div class="faqtab-content faqanswer"><?= $data->answer3()->kirbytext() ?></div>
      </div>
      <div class="faqtab">
        <input type="checkbox" id="chck4" class="faqtabinput">
        <label class="faqtab-label faqquestion" for="chck4"><?= $data->question4()->html() ?></label>
        <div class="faqtab-content faqanswer"><?= $data->answer4()->kirbytext() ?></div>
      </div>
    </div>
  </div>
</section>