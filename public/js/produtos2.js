
  let produtoJson = [
    {
        id: 1,
        name: 'Processador Intel',
        img: 'images2/i3.png',
        price: [599.99, 689.99, 699.99],
        sizes: [
          'PROCESSADOR INTEL CORE I3-10105F, 4-CORE, 8-THREADS, 3.7GHZ (4.4GHZ TURBO) CACHE 6MB, LGA1200, BX8070110105F',
          'PROCESSADOR INTEL CORE I3-12100F, 4-CORE, 8-THREADS, 3.3GHZ ( 4.3GHZ TURBO), CACHE 12MB, LGA1700, BX8071512100F',
          'PROCESSADOR INTEL CORE I3-10105, 4-CORE, 8-THREADS, 3.7GHZ (4.4GHZ TURBO), CACHE 6MB, LGA1200, BX8070110105'
        ],
        description: 'Processador Intel'
      },
      {
        id: 2,
        name: 'Placa Mãe',
        img: 'images2/placa_mae.png',
        price: [589.99, 659.99, 749.99],
        sizes: [
          'PLACA MAE BIOSTAR H410MH DDR4 SOCKET LGA1200 CHIPSET INTEL H410',
          'PLACA MAE TGT H310, DDR4, SOCKET LGA1151, CHIPSET INTEL H310, TGT-MBH310-01',
          'PLACA MAE ASUS PRIME H510M-E DDR4 LGA1200 INTEL H510, PRIME H510M-E'
        ],
        description: 'Placa Mãe'
      },
      {
        id: 3,
        name: 'Placa de vídeo',
        img: 'images2/placa_video.png',
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
        img: 'images2/memoria_ram.png',
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
        img: 'images2/hd.png',
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
        img: 'images2/ssd.png',
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
        img: 'images2/gabinete.png',
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
        img: 'images2/fonte.png',
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
        img: 'images2/cooler.png',
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
        img: 'images2/monitor.png',
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
        img: 'images2/mouse.png',
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
        img: 'images2/teclado.png',
        price: [39.99, 44.99, 59.99],
        sizes: [
          'TECLADO MULTILASER PS2 SLIM, TC225',
          'TECLADO AIGO K120, ABNT2, PRETO, K120',
          'TECLADO LOGITECH K120 USB PRETO, 920-004423'
        ],
        description: 'Teclado'
      },
      
      
      
];