INSERT INTO
    adressen
        (straat,
        huisnummer,
        busnummer, 
        postcode_id,
        land)
    VALUES
        ("Lijsterhof",
        5,
        12,
        (select postcode_id from postcodes where gemeente = :gemeente),
        "Belgie");