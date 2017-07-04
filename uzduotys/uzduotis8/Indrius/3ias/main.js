console.log("valio");
// 1ma uzduotis///
var bagazine = ["zpaske", "kastuvas", "gesintuvas", "virve", "krokodilas"];
console.log(bagazine);

bagazine.push("butelis vandens");
console.log("butelis " + bagazine.join());
bagazine.splice(0, 0, "ziebtuvelis");
console.log("art::" + bagazine.toString());

bagazine.splice(2, 1);
console.log("art::" + bagazine.toString());


// 2tra uzduotis///////

masyvas = new Array(50);
console.log("stalcius", masyvas);
for (var i = 0; i < 50; i++) {
  masyvas[i] = 0;
}
console.log("stalcius" + masyvas);

i = 0;
masyvas2 = [];
while (i < 50) {
  masyvas2[i] = 1;
  i++
}

console.log(masyvas2);
