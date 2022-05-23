#pour appeler le script
#		/bin/sh script.sh nom_fichier

if [ $# -ne 1 ] 
then
	echo "Mauvais usage du programme"
	echo "/bin/sh script chemin/vers/fichier"
	exit
fi

while read -r ligne
do
	echo $ligne > tmp #ecrire dans la ligne dans le fichier tmp
	nom=`cut -d: -f1 < tmp`
	numero=`cut -d: -f2 < tmp`
	age=`cut -d: -f3 < tmp`
	ville=`cut -d: -f4 < tmp`
	echo $nom
	echo $numero
	echo $age
	echo $ville
	rm tmp #suppression du fichier tmp
done < $1
