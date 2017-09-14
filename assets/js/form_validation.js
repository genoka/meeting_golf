	function test_champ(champ) {
	
		expr_reg = /^\d*$/ ;
		// Ci-dessus : expression régulière qui match 0,1 ou plusieurs chiffres ;
		// de cette façon on vérifie que l'utilisateur entre bien un nombre entier
		
		if ( expr_reg.test(champ.value) ) {
			// c'est bien un nombre entier
			calcul_form() ;
		} 
		else {
			// ce n'est pas un nombre entier
			alert ("Ce n'est par un nombre entier !") ;
		
			document.form1.elements[champ.name].value = "" ; // on efface la valeur entrée erronée
			calcul_form() ;
	    }
		
	}

	function calcul_form() {
		// le with ci-dessous permet d'abréger "document.forms.form1.p1.value" en "p1.value"
		
		with (document.forms.form1) {
			p1.value = q1.value * pu1.value ;
			p2.value = q2.value * pu2.value ;
			p3.value = q3.value * pu3.value ;
			total.value = p1.value *1 + p2.value *1 + p3.value *1 ;
			// Ai mis les *1 ci-dessus afin que les + fassent une somme arithmétique
			// et non pas une concaténation de chaînes de caractères
		}
	}
	
	function champ_verrouille(champ,valeur) {
		// Remarque : en HTML 4.0, il existe un attribut "read-only" pour la
		// balise <INPUT TYPE=text> qui interdira de modifier un champ
		// mais ce que je fais ci-dessous est beaucoup plus sûr !!!
		// alert ("Ce champ de peut pas être modifié !") ;
		
		document.form1.elements[champ.name].value = valeur ; // on remet "valeur" initiale dans champ
	}
	
	function soumettre_form() {
	
		if ( document.forms.form1.total.value == 0 ) {
			alert ("Vous n'avez rien commandé !\n => commande non soumise") ;
			return false ;
		} 
		else {
			// Les 2 lignes ci-dessous devraient être activées pour réellement passer le form. à script CGI
			// document.form1.method = "POST" ;
			// document.form1.action = "http://dgrwww.epfl.ch/cgi-bin/uncgi/mail_form.sh?mailto=Jean-Daniel.Bonjour@epfl.ch" ;
			document.write ("<H3 ALIGN=center>Commande passée\n pour un montant de " +
			document.forms.form1.total.value + " Frs</H3>") ;
			document.close () ;
			return true ;
		}
	}
