import sys
import json

# Lire les données JSON passées en argument
if len(sys.argv) > 1:
    data = json.loads(sys.argv[1])
else:
    print("Aucune donnée fournie")
    sys.exit(1)

nom = data['nom']
prix = float(data['prix'])
quantite = int(data['quantite'])
total = float(data['total'])
taxe = total * 0.5
total_avec_taxe = total + taxe

# Afficher le résultat
result = f"""
<h1>Product Information</h1>
<p>Name: {nom}</p>
<p>Quantity: {quantite}</p>
<p>Price: {prix}</p>
<p>Total: {total}</p>
<p>Tax: {taxe}</p>
<p>Total with Tax: {total_avec_taxe}</p>
"""
print(result)
