<?php include 'head.php'; ?>
<style>
.faq-container {
  width: 60rem;
  margin: 2rem auto 4rem auto;
  padding: 40px;
  background-color: #555;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  font-size: 24px;
  color: #fff;
  margin: 2rem auto;

}

.faq-item {
  margin-bottom: 20px;
}

.faq-question {
  font-size: 18px;
  font-weight: bold;
  color: #333;
  cursor: pointer;
}

.faq-answer {
  display: none;
  font-size: 16px;
  color: #666;
  margin-top: 10px;
}

.faq-answer.show {
  display: block;
}

.faq-question::after {
  content: '+';
  float: right;
  font-size: 20px;
  font-weight: bold;
  color: #333;
  transition: transform 0.3s;
}

.faq-question.show::after {
  content: '-';
  transform: rotate(45deg);
}




</style>

<h2>Frequently Asked Questions</h2>

<div class="faq-container">

    <div class="faq-item">
        <h3>Question 1 &emsp;<i class="fa-duotone fa-question"></i></h3>
        <p><i class="fa-sharp fa-solid fa-quote-left"></i>
            Answer to question 1 goes here.
            <i class="fa-sharp fa-solid fa-quote-right"></i></p>
    </div>

    <div class="faq-item">
        <h3>Question 2 &emsp;<i class="fa-duotone fa-question"></i></h3>
        <p><i class="fa-sharp fa-solid fa-quote-left"></i>
            Answer to question 2 goes here.
            <i class="fa-sharp fa-solid fa-quote-right"></i></p>
    </div>

    <div class="faq-item">
        <h3>Question 3 &emsp;<i class="fa-duotone fa-question"></i></h3>
        <p><i class="fa-sharp fa-solid fa-quote-left"></i>
            Answer to question 3 goes here.
            <i class="fa-sharp fa-solid fa-quote-right"></i></p>
    </div>

    <!-- Add more FAQ items as needed -->
</div>
