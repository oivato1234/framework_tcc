
  let produtoJson = [
    {
        id: 1,
        name: 'Processador Intel',
        img: 'images/proc_intel.png',
        price: [1389.99, 1859.99, 2499.99],
        sizes: [
          'Processador Intel Core i5 12400F 2.5GHz (4.4GHz Turbo), 12ª Geração, 6-Cores 12-Threads, LGA 1700, BX8071512400F',
          'Processador Intel 12600KF Core I5 1700, 3.70 GHz, 12a Geração - BX8071512600KF',
          'Processador Intel I7 12700, 12 Geração, 2.1ghz, 12 núcleos, 25MB, 20 Threads, LGA 1700 - Bx8071512700'
        ],
        description: 'Processador Intel'
      },
      {
        id: 2,
        name: 'Placa Mãe',
        img: 'images/placa_mae.png',
        price: [789.99, 899.99, 1199.99],
        sizes: [
          'Suporta até 8 Núcleos',
          'Suporta até 8 Núcleos',
          'Suporta até 12 Núcleos'
        ],
        description: 'Placa Mãe'
      },
      {
        id: 3,
        name: 'Placa de vídeo',
        img: 'images/placa_video.png',
        price: [1499.99, 1559.99, 2399.99],
        sizes: [
          'Placa de Vídeo Zotac Gaming NVIDIA GeForce RTX 2060, 6GB, GDDR6 - ZT-T20600H-10M',
          'Placa de Vídeo MSI NVIDIA GeForce RTX 2060 Ventus GP - 6GB',
          'Placa de Video Gigabyte GeForce RTX 3060 Gaming OC 12G, 12 GB GDDR6, LHR, Ray Tracing - GV-N3060GAMING OC-12GD (rev 2.0)'
        ],
        description: 'Placa de vídeo'
      },
      {
        id: 4,
        name: 'Memória Ram',
        img: 'images/memoria_ram.png',
        price: [262.69, 275.59, 429.99],
        sizes: [
          'Memoria Desktop DDR4 Memoria Kf426c16bb/8, 8Gb, DDR4 2666mhz Cl16 Dimm Fury Beast',
          'Memória, Kingston Fury Beast, Rgb, 8gb, Ddr4, 3200mhz, Cl16 - Kf432c16bba/8.',
          'Memória Ram Fury Beast, Ddr4 Rgb, Color Preto, 16GB, 1 Kingston Kf432c16bb1a/1.'
        ],
        description: 'Memória Ram'
      },
      {
        id: 5,
        name: 'HD',
        img: 'images/hd.png',
        price: [159.99, 249.99, 469.99],
        sizes: [
          'HD 500GB Western Digital, 5400 RPM, Green Power Sata II - Wd5000green',
          'HD Seagate 1TB BarraCuda, 3.5 SATA - ST1000DM010',
          'HD Seagate 4TB BarraCuda, 3.5 SATA-ST4000DM004'
        ],
        description: 'Armazenamento HD'
      },
      {
        id: 6,
        name: 'SSD',
        img: 'images/ssd.png',
        price: [132.99, 143.99, 229.99],
        sizes: [
          'SSD 120 GB Kingston A400, SATA, Leitura: 500MB/s e Gravação: 320MB/s - SA400S37/120G',
          'SSD 240 GB Kingston A400, SATA, Leitura: 500MB/s e Gravação: 350MB/s - SA400S37/240G',
          'SSD 480 GB Kingston A400, SATA, Leitura: 500MB/s e Gravação: 450MB/s - SA400S37/480G'
        ],
        description: 'Armazenamento SSD'
      },
      {
        id: 7,
        name: 'Gabinete',
        img: 'images/gabinete.png',
        price: [169.99, 249.99, 349.99],
        sizes: [
          'Gabinete Gamer Rise Mode Z2 Glass, RGB, Lateral em Vidro Fumê, 1x Fan, Preto - RM-Z02-02-RGB',
          'Gabinete Gamer Rise Mode Glass 06, Lateral e Frontal em Vidro, Frost Branco - RM-WT-06-FW',
          'Gabinete Gamer Rise Mode Glass 06X, Lateral em Vidro Fumê e Frontal em Vidro Temperado, Preto - RM-CA-06X-FB'
        ],
        description: 'Gabinete'
      },
      {
        id: 8,
        name: 'Fonte',
        img: 'images/fonte.png',
        price: [219.99, 269.99, 279.99],
        sizes: [
          'Fonte Gigabyte GP-P450B, 450W, 80 Plus Bronze - 28200-P450B-1BRR',
          'Fonte Corsair VS500, 500W, 80 Plus White - CP-9020223-BR',
          'Fonte Gigabyte GP-P550B, 550W, 80 Plus Bronze - 28200-P550B-1BRR'
        ],
        description: 'Fonte'
      },
      
      {
        id: 9,
        name: 'Cooler',
        img: 'images/cooler.png',
        price: [79.99, 89.99, 94.99],
        sizes: [
          'Cooler Fan Rise Mode Energy, 3 Unidades, 120mm, ARGB, Preto - FN-02-RGB-5V',
          'FCooler Fan Rise Smart, 3 Unidades, 120mm, RGB - RM-FN-02-RGB',
          'Cooler Fan Rise Mode RGB Aura, 3 Unidades, 120mm, Preto - RM-AU-02-RGB'
        ],
        description: 'Cooler'
      },
      {
        id: 10,
        name: 'Monitor',
        img: 'images/monitor.png',
        price: [699.99, 799.99, 959.99],
        sizes: [
          'Monitor LG 19.5 LED, HD, HDMI, VESA, Ajuste de Ângulo - 20MK400H-B',
          'Monitor Gamer Samsung 22 IPS, 75 Hz, Full HD, FreeSync, HDMI/VGA, VESA - LF22T350FHLMZD',
          'Monitor Gamer Samsung 24 IPS 75 Hz Full HD FreeSyncnHDMI - LF24T350FHLMZD'
        ],
        description: 'Monitor'
      },
      {
        id: 11,
        name: 'Mouse',
        img: 'images/mouse.png',
        price: [45.99, 78.99, 82.59],
        sizes: [
          'MOUSE TRUST YVI WIRELESS USB PRETO/CINZA, T18519',
          'MOUSE GAMER REDRAGON NOTHOSAUR 3200DPI, M606',
          'MOUSE GAMER REDRAGON CERBERUS 7200DPI, M703'
        ],
        description: 'Mouse'
      },
      {
        id: 12,
        name: 'Teclado',
        img: 'images/teclado.png',
        price: [49.99, 89.99, 189.99],
        sizes: [
          'TECLADO GAMER FORTREK BLACKFIRE, RAINBOW, ABNT2, PRETO, 75661',
          'TECLADO GAMER REDRAGON KARURA 2, BRANCO, K502W-N',
          'TECLADO GAMER REDRAGON HARPE RGB, K503RGB'
        ],
        description: 'Teclado'
      },
      
      
      
];