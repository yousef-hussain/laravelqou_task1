<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>profile</title>
  <style>
    /* before start  */
    * {
      box-sizing: border-box;
    }
ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}
a {
    text-decoration: unset;
    color: #000;
}

/*start*/
body {
    background-color: #555;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh
  }
.container {
    width: 70%;
    display: block;
    margin: 0 auto;
    height: 500px;
    background-color: #DDD;
    padding-top: 60px;
    box-shadow: 0 0 30px aqua;
    box-sizing: border-box;
}
.container .children_box {
    background-color: #EEE;
    width: 100%;
    height: 100%;
    display: grid;
    grid-template-columns: 350px minmax(300px, 1fr);
    box-sizing: border-box;
    position: relative;
}
.container .children_box::after {
  content: "";
  position: absolute;
  top: -30px;
  left: 0;
  height: 30px;
  width: 100%;
  background-color: orange;
  border-radius: 50px 50px 0 0;
}
.container .children_box .first-col {
    background-color: #AAA;
    padding: 10px;
    padding-top: 20px;
}

.container .children_box .first-col .image_icon {
    height: 100px;
    width: 100px;
    border-radius: 50%;
    overflow: hidden;
    display: block;
    margin: 0 auto;
    margin-bottom: 20px;
    background-color: #999;
}
.container .children_box .first-col .image_icon img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
}
.container .children_box .first-col .my_info {
    margin-bottom: 30px;
}
.container .children_box .first-col .my_info li {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: start;
}
.container .children_box .first-col .my_info li span {
    font-size: 16px;
}
.container .children_box .first-col .my_info li span:first-of-type {
    font-weight: 800;
    display: inline-block;
    width: 40%;
}
.container .children_box .first-col .my_info li span:last-of-type {
    width: 60%;
    flex: 1 auto;
    overflow-wrap: break-word;
}
.container .children_box .second-col {
    background-color: #FFF;
    border-top-right-radius: 10px;
    padding: 10px;
}
/****************************  start responsive   ************************/
@media (max-width: 575.9px){
    .container {
        width: 100%;
        box-shadow: unset;
        height: auto;
        margin: 0;
        padding-top: 30px;
    }
    .container .children_box {
        grid-template-columns: 1fr;
    }
    .container .children_box::after {
      height: 15px;
      top: -15px;
    }
    .container .children_box .first-col {
        padding: 20px 50px;
    }
    .container .children_box .first-col .image_icon {
        width: 70px;
        height: 70px;
    }
    .container .children_box .first-col ul {
        width: auto;
    }
    .container .children_box .first-col .my_info li span {
        font-size: 12px;
    }
    .container .children_box .second-col {
        border-radius: unset;
    }
    .container .children_box .second-col h3{
        font-size: 14px;
    }
    .container .children_box .second-col p {
        font-size: 12px;
    }
}
@media (min-width:576px) and (max-width:767.9px) {
    .container {
        height: auto;
        margin: 0 auto;
        padding-top: 40px;
    }
    .container .children_box {
        grid-template-columns: 1fr;
    }
    .container .children_box::after {
      height: 20px;
      top: -20px
    }
    .container .children_box .first-col .image_icon {
        width: 60px;
        height: 60px;
    }
    .container .children_box .first-col ul {
        width: 280px;
        margin: auto;
    }
    .container .children_box .first-col .my_info li span {
        font-size: 13px;
    }
    .container .children_box .second-col {
        border-radius: unset;
    }
    .container .children_box .second-col h3{
        font-size: 15px;
    }
    .container .children_box .second-col p {
        font-size: 13px;
    }
}
@media (min-width:768px) and (max-width:991.9px) {
    .container {
        height: auto;
        margin: 0 auto;
    }
    .container .children_box {
        grid-template-columns: 1fr;
    }
    .container .children_box .first-col ul {
        width: 300px;
        margin: auto;
    }
    .container .children_box .first-col .my_info li span {
        font-size: 14px;
    }
    .container .children_box .second-col {
        border-radius: unset;
    }
    .container .children_box .second-col h3{
        font-size: 16px;
    }
    .container .children_box .second-col p {
        font-size: 14px;
    }
}
@media (min-width: 992px) and (max-width:1200px) {
    .container .children_box .first-col .my_info li span {
        font-size: 15px;
    }
    .container .children_box .second-col h3{
        font-size: 17px;
    }
    .container .children_box .second-col p {
        font-size: 15px;
    }
}
  </style>
</head>
<body>
  <section class="container">
    <div class="children_box">
      <div class="first-col">
        <div class="image_icon">
          <img src="/images/my.jpg" alt="my image">
        </div>
        <ul class="my_info">
          <li><span>Name: </span><span>Yousef Jehad Eid Hussain</span></li>
          <li><span>Nationality: </span><span>Palestinian</span></li>
          <li><span>Date of Birth: </span><span>02/10/2000</span></li>
          <li><span>Marital status: </span><span>single</span></li>
          <li><span>Phone number: </span><span><a href="tel:+972597787570">059-778-7570</a></span></li>
          <li><span>Email: </span><span><a href="mailto:yousef123hussain@gmail.com">yousef123hussain@gmail.com</a></span></li>
        </ul>
      </div>
      <div class="second-col">
        <h3>personal information</h3>
        <p>I graduated from Al-Quds Open University in 2022-2023. Main specialization: information and communication technologies, sub-specialization: web technologies.</p>
      </div>
    </div>
  </section>

</body>
</html>