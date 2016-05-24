SELECT
	klanten.klant_id,
    klanten.klant_naam,
    klanten.klant_achternaam,
    klanten.klant_adres_id,
    adressen.straat,
    adressen.huisnummer,
    adressen.busnummer,
    adressen.postcode_id,
    postcodes.postcode,
    postcodes.gemeente,
    klanten.klant_tlfnr,
    klanten.klant_email,
    klanten.klant_geboortedatum,
    klanten.klant_rijksregnr
FROM
	(klanten
LEFT JOIN
	adressen
ON
	klanten.klant_adres_id = adressen.adres_id)
LEFT JOIN
	postcodes
ON
	adressen.postcode_id = postcodes.postcode_id;