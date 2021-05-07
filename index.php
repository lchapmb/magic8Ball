<?php

function magic8Ball(){
  echo "What is your question?\n";
  $question = readline(">>");
  echo "So, your want to know: " . $question . "\nOne moment...\n";
  $option = rand(0, 19);

  switch($option){
    case 0:
      echo "It is certain.";
      break;
    case 1:
      echo "It is decidedly so.";
      break;
    case 2:
      echo "Without a doubt.";
      break;
    case 3:
      echo "Yes - definitely.";
      break;
    case 4:
      echo "You may rely on it.";
      break;
    case 5:
      echo "As I see it, yes.";
      break;
    case 6:
      echo "Most likely.";
      break;
    case 7:
      echo "Outlook good.";
      break;
    case 8:
      echo "Yes.";
      break;
    case 9:
      echo "Signs point to yes.";
      break;
    case 10:
      echo "Reply hazy, try again.";
      break;
    case 11:
      echo "Ask again later.";
      break;
    case 12:
      echo "Better not tell you now.";
      break;
    case 13:
      echo "Cannot predict now.";
      break;
    case 14:
      echo "Concentrate and ask again.";
      break;
    case 15:
      echo "Don't count on it.";
      break;
    case 16:
      echo "My reply is no.";
      break;
    case 17:
      echo "My sources say no.";
      break;
    case 18:
      echo "Outlook not so good.";
      break;
    case 19:
      echo "Very doubtful.";
      break;
    default:
      echo "Error! You've fucked it mate.";
      break;    
  }
  echo "\n";

  echo "Would you like to ask another question? (Yes/No)";
  $play_again = readline(">>");
  switch($play_again) {
    case "Yes":
    case  "Y":
    case "yes":
    case "y":
      magic8Ball();
      break;
    case "No":
    case "N":
    case "no":
    case "n":
      echo "Goodbye... and good luck.\n";
      break;
    default:
      "I don't understand. Goodbye... and good luck.\n";
      break;
  }
};

magic8Ball();
