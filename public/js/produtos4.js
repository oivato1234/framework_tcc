
  let produtoJson = [
    {
        id: 1,
        name: 'Processador AMD',
        img: 'images4/amd.png',
        price: [679.99, 849.99, 999.99],
        sizes: [
          'PROCESSADOR AMD RYZEN 5 4500, 6-CORE, 12-THREADS, 3.6GHZ (4.1GHZ TURBO), CACHE 11MB, AM4, 100-100000644BOX',
          'PROCESSADOR AMD RYZEN 5 5500, 6-CORE, 12-THREADS, 3.6GHZ (4.2GHZ TURBO), CACHE 19MB, AM4, 100-100000457BOX',
          'PROCESSADOR AMD RYZEN 5 5600, 6-CORE, 12-THREADS, 3.5GHZ (4.4GHZ TURBO), CACHE 35MB, AM4, 100-100000927BOX'
        ],
        description: 'Processador AMD'
      },
      {
        id: 2,
        name: 'Placa Mãe',
        img: 'images4/placa_mae.png',
        price: [399.99, 459.99, 659.99],
        sizes: [
          'PLACA MAE BIOSTAR B450MHP, DDR4, SOCKET AM4, M-ATX, CHIPSET AMD B450, B450MHP',
          'PLACA MAE ASROCK A320M-HDV R4.0 DDR4 SOCKET AM4 CHIPSET AMD A320',
          'PLACA MAE GIGABYTE B450M DS3H V2 DDR4 SOCKET AM4 CHIPSET AMD B450'
        ],
        description: 'Placa Mãe'
      },
      {
        id: 3,
        name: 'Placa de vídeo',
        img: 'images4/placa_video.png',
        price: [179.99, 189.99, 195,99],
        sizes: [
          'PLACA DE VIDEO DUEX GEFORCE GT 610, 1GB, DDR3, 64BIT, DX GT610LP-1GD3',
          'PLACA DE VIDEO AFOX GEFORCE GT610, 1GB, DDR3, 64-BIT, AF610-1024D3L5',
          'PLACA DE VIDEO AFOX GEFORCE GT220, 1GB, DDR3, 128-BIT, AF220-1024D3L2'
        ],
        description: 'Placa de vídeo'
      },
      {
        id: 4,
        name: 'Memória Ram',
        img: 'images4/memoria_ram.png',
        price: [159.99, 179.59, 199.99],
        sizes: [
          'MEMORIA CORSAIR XMS3, 4GB (1X4GB), DDR3, 1600MHZ, C9, PRETO, CMX4GX3M1A1600C9',
          'MEMORIA CORSAIR VALUESELECT, 4GB (1X4GB), DDR4, 2400MHZ, C16, CMV4GX4M1A2400C16',
          'MEMORIA CORSAIR VALUESELECT, 4GB (1X4GB), DDR4, 2666MHZ, C18, CMV4GX4M1A2666C18'
        ],
        description: 'Memória Ram'
      },
      {
        id: 5,
        name: 'HD',
        img: 'images4/hd.png',
        price: [90.49, 99.99, 149.99],
        sizes: [
          'Hd Sata3 500gb Western Digital Wd Green Pull 5400rpm 16mb',
          'Hd Western Digital 500gb Wd Green 3.5" Sata 2 7200rpm Pull - Wd5000aads',
          'Hd Interno 500Gb Desktop Sata 32Mb 3.5 7200Rpm Wd5000Azlx-00K2Ta0 Western Digital Hd Interno'
        ],
        description: 'Armazenamento HD'
      },
      {
        id: 6,
        name: 'SSD',
        img: 'images4/ssd.png',
        price: [132.99, 143.99, 229.99],
        sizes: [
          'SSD 120 GB Kingston A400, SATA, Leitura: 500MB/s e Gravação: 320MB/s - SA400S37/120G',
          'SSD DUEX BLACK SERIES DX 120H 120GB 2.5" SATA III 6GB/S, SSD 120GB DX 120H',
          'SSD TEAM GROUP T-FORCE DELTA S RGB 250GB 2.5" SATA III PRETO, T253TR250G3C312'
        ],
        description: 'Armazenamento SSD'
      },
      {
        id: 7,
        name: 'Gabinete',
        img: 'images4/gabinete.png',
        price: [94.99, 119.99, 219.99],
        sizes: [
          'GABINETE TGT HAL, PRETO, TGT-HAL-SFBL01',
          'GABINETE AIGO A21, PRETO, A21-BK',
          'GABINETE GAMER AIGO BLACK TECHNOLOGY MINI PRETO'
        ],
        description: 'Gabinete'
      },
      {
        id: 8,
        name: 'Fonte',
        img: 'images4/fonte.png',
        price: [154.99, 169.99, 219.99],
        sizes: [
          'FONTE TGT TOMAHAWK 500W PRETO, TMWK500',
          'FONTE ONEPOWER 600W PRETO, MP600W3-I',
          'FONTE AIGO WARRIOR AK500, 500W, PRETO, WARRIOR AK500'
        ],
        description: 'Fonte'
      },
      
      {
        id: 9,
        name: 'Cooler',
        img: 'images4/cooler.png',
        price: [69.99, 79.99, 89.99],
        sizes: [
          'COOLER PARA PROCESSADOR COOLER MASTER A50, RH-A50-26FK-R1',
          'COOLER PARA PROCESSADOR COOLER MASTER I70 INTEL, RR-I70-20FK-R1',
          'COOLER PARA PROCESSADOR COOLER MASTER HYPER T200, RR-T200-22PK-R1'
        ],
        description: 'Cooler'
      },
      {
        id: 10,
        name: 'Monitor',
        img: 'images4/monitor.png',
        price: [319.99, 329.99, 399.99],
        sizes: [
          'MONITOR PCTOP 17 LED 5MS 60HZ HDMI/VGA BRANCO, MLP170HDMI',
          'MONITOR PCTOP 17 LED 5MS 60HZ HDMI/VGA PRETO, MLP170HDMI',
          'MONITOR PCTOP MLP190HDMI, 19POL, WXGA, 5MS, 60HZ, HDMI/VGA, PRETO, MLP190HDMI'
        ],
        description: 'Monitor'
      },
      {
        id: 11,
        name: 'Mouse',
        img: 'images4/mouse.png',
        price: [41.59, 44.99, 49.99],
        sizes: [
          'MINI MOUSE LOGITECH M187 WIRELESS CORAL, 910-005362',
          'MOUSE LOGITECH M110 SILENT 1000DPI VERMELHO, 910-005492',
          'MOUSE AIGO M100, 1000DPI, USB, PRETO, M100'
        ],
        description: 'Mouse'
      },
      {
        id: 12,
        name: 'Teclado',
        img: 'images4/teclado.png',
        price: [39.99, 44.99, 59.99],
        sizes: [
          'TECLADO MULTILASER PS2 SLIM, TC225',
          'TECLADO AIGO K120, ABNT2, PRETO, K120',
          'TECLADO LOGITECH K120 USB PRETO, 920-004423'
        ],
        description: 'Teclado'
      },
      
      
      
];