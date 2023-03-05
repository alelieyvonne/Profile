*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.banners{
    width: 100%;
    height: 100%;
    background-image: url(images/background.png.jpg);
    background-size: cover;
    background-position: center;
  
}

html, body {
  height: 100%;
  margin: 0;
  font-family: Lato;
  color: rgb(123, 85, 85);
}

#page1 { background: #f6e0b5; }
#page2 { background: #eea990; }
#page3 { background: #aa6f73; }

.wrapper {
  display: table;
  height: 100%; width: 100%;
  margin-top: 0%;
}

.stage {
  display: table-cell;
  vertical-align: middle;
}

.tabled, .middled {
  text-align: center;
  margin: 0 auto;
}

h1 { text-transform: uppercase; }
h1 ~ span, p { color: #2d2d2d; }
.thin { font-weight: 300; }
.thick { font-weight: 900; }

p {
  position: absolute;
  bottom: 0;
  text-align: right;
  right: 1em;
  font-size: 80%;
}

.column1 {
    float: left;
    display: flex;
    background: #dfe0cc;
    margin-left: 50px;
    padding: 10px;
    width: 40%;
    min-height: 500px;
    background-size: 20px;
    border: 5px rgb(94, 68, 68) solid
    
}

h1 {
  font-size: 20px;
  font-style: italic;
  position: relative;
  margin-left: 25%;
  margin-top: 10%;
  color:rgb(118, 79, 79);
  text-align: center;
}

p, a{
  margin-bottom: 20%;
  margin-right: 20%;
  font-size: 20px;
  font-style: normal;
  color: #babc9a;
  text-align: center;
}


.column2 {
    float: right;
    display: flex;
    background: #dfe0cc;
    margin-right: 50px;
    padding: 10px;
    width: 40%;
    min-height: 500px;
    border: 5px rgb(94, 68, 68) solid;
}
img {
  width: 100%;
  height: 100%;
  margin-top: 70px;
  display: block;
  margin: auto;
}
