///////// ARRAY

names = ['tomas', 'pietkus', '25', 'vdu-inzinerija'];
console.log(names.join()); /// sujungia vardus

////
names.sort();
console.log(names.join()); //////surikiuoja elementus
//////
    
    
                                    ///// for naudojamas atvaizduojamas masyva
for (i = 0, i < names.length; i++){ ///i naudojama kiek kartu begti per masyva
    console.log( names[i] );  ////names[i] - net negalvojant galima deti i vidu
}
