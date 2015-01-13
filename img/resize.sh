echo "enter the name of the file you wish to resize. Make sure it has been placed in the 'img/orig' folder and that it is a .jpg"
read filename

echo "Editing permissions..."
eval "chmod -R 755 orig/"

echo "Coverting images..."
eval "convert orig/${filename} -resize 77x116^ sml/${filename}"
eval "convert orig/${filename} -resize 567x860^ med/${filename}"
eval "cp orig/${filename} lrg/${filename}"

echo "Editing permissions..."
eval "chmod -R 755 sml/"
eval "chmod -R 755 med/"
eval "chmod -R 755 lrg/"