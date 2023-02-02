function limpar() {
  let erroDel = document.querySelector("div.config");

  erroDel.removeAttribute("class");
  erroDel.innerHTML = "";
}

function verificarDiv() {
  let div1 = document.querySelector("div#div1");
  let div2 = document.querySelector("div#div2");
  let div3 = document.querySelector("div#div3");
  let div4 = document.querySelector("div#div4");
  let div5 = document.querySelector("div#div5");
  let n5 = div5.classList.length;
  let n4 = div4.classList.length;
  let n3 = div3.classList.length;
  let n2 = div2.classList.length;
  let n1 = div1.classList.length;
  let a = document.getElementById("a");
  let b = document.getElementById("b");
  let c = document.getElementById("c");
  let d = document.getElementById("d");

  console.log(n1);
  console.log(n2);
  console.log(n3);
  console.log(n4);

  if (n5 == 3) {
    n4 += 1;
    n1 += 1;
    a.innerHTML = "5";
    b.innerHTML = "5";
    c.innerHTML = "5";
    d.innerHTML = "5";
  } else {
    if (n4 == 3) {
      n3 += 1;
      a.innerHTML = "X";
      b.innerHTML = "Y";
      c.innerHTML = "Z";
      d.innerHTML = "W";
    } else {
      if (n3 == 3) {
        a.innerHTML = "1";
        b.innerHTML = "2";
        c.innerHTML = "3";
        d.innerHTML = "4";
        n2 += 1;
      } else {
        if (n2 == 3) {
          a.innerHTML = "A";
          b.innerHTML = "B";
          c.innerHTML = "C";
          d.innerHTML = "D";
          n1 += 1;
        } else {
          a.innerHTML = 1;
          n5 += 1;
        }
      }
    }
  }
}
