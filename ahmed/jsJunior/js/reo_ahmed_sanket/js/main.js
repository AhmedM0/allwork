//timer

var oldTime = Date.now();
var timer = setInterval(() => {
  var currentTime = Date.now();
  var diff = currentTime - oldTime;
  var sec = Math.floor(diff / 1000);
  document.querySelector("#log").innerHTML = `Time : ${sec}`;
}, 1000);

// game

var cvs = document.getElementById("snake");
var ctx = cvs.getContext("2d");

//create the unit

var box = 32;

//load image

var ground = new Image();
ground.src = "./images/ground.jpg";

var foodImg = new Image();
foodImg.src = "./images/food.png";

//create snake
var snake = [];
snake[0] = {
  x: 9 * box,
  y: 10 * box
};

// control the snake

var d;

document.addEventListener("keydown", direction);

function direction(event) {
  var key = event.keyCode;
  if (event.keyCode == 37 && d != "RIGHT") {
    d = "LEFT";
  } else if (event.keyCode == 38 && d != "DOWN") {
    d = "UP";
  } else if (event.keyCode == 39 && d != "LEFT") {
    d = "RIGHT";
  } else if (event.keyCode == 40 && d != "UP") {
    d = "DOWN";
  }
}

//create food

var food = {
  x: Math.floor(Math.random() * 17 + 1) * box,
  y: Math.floor(Math.random() * 15 + 3) * box
};

//create score

var score = 0;

// collision

function collision(head, array) {
  for (var i = 0; i < array.length; i++) {
    if (head.x == array[i].x && head.y == array[i].y) {
      return true;
    }
  }
  return false;
}

// draw
function draw() {
  ctx.drawImage(ground, 0, 0);

  for (var i = 0; i < snake.length; i++) {
    ctx.fillStyle = i == 0 ? "green" : "pink";
    ctx.fillRect(snake[i].x, snake[i].y, box, box);
  }

  ctx.drawImage(foodImg, food.x, food.y);

  var snakeX = snake[0].x;
  var snakeY = snake[0].y;

  if (d == "LEFT") snakeX -= box;
  if (d == "UP") snakeY -= box;
  if (d == "RIGHT") snakeX += box;
  if (d == "DOWN") snakeY += box;

  if (snakeX == food.x && snakeY == food.y) {
    score++;
    food = {
      x: Math.floor(Math.random() * 17 + 1) * box,
      y: Math.floor(Math.random() * 15 + 3) * box
    };
  } else {
    snake.pop();
  }

  // add new head

  var newHead = {
    x: snakeX,
    y: snakeY
  };

  // gameover
  if (
    snakeX < box ||
    snakeX > 17 * box ||
    snakeY < 3 * box ||
    snakeY > 17 * box ||
    collision(newHead, snake)
  ) {
    clearInterval(game);
    clearInterval(timer);
  }

  snake.unshift(newHead);

  ctx.fillStyle = "white";
  ctx.font = "45px Change one";
  ctx.fillText(score, 2 * box, 1.6 * box);
}

var game = setInterval(draw, 100);
