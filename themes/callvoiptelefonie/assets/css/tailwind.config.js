
let colors = {
  'grey-dark': '#203476',
  'grey-medium': '#6676a9',
  'grey': '#223240',
  'grey-light': '#b4c1e6',
  'grey-lightest': '#ebf2f7',
  'white': '#ffffff',
  'green': '#78B52E',
  'blue-lightest': '#EBF8FF',
  'blue-light': '#374984',
  'blue': '#2069f3',
  'blue-dark': '#203a83',
  'red': '#ff3131',
  'orange': '#f3a620',
  'bronze': '#B79C7E',
  'amber': '#9f0100',
  'darkgreen': '#035837',
  'yellow': '#fcb603',
  'black': '#000000',
  'oranger': '#f78503',
  'lighter': '#274091'
}

module.exports = {
  theme: {

    colors: colors,
    screens: {
      'sm': '476px',
      'md': '768px',
      'lg': '992px',
      'xl': '1200px',
      'xxl': '1400px',
    },


    boxShadow: {
      default: '0 2px 12px 0 rgba(0,0,0,0.10)',
      'md': '0 4px 8px 0 rgba(0,0,0,0.12), 0 2px 4px 0 rgba(0,0,0,0.08)',
      'lg': '0 15px 30px 0 rgba(0,0,0,0.11), 0 5px 15px 0 rgba(0,0,0,0.08)',
      'xl': '-4px 13px 10px 9px rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08)',
      'inner': 'inset 0 2px 4px 0 rgba(0,0,0,0.06)',
      'outline': '0 0 0 3px rgba(52,144,220,0.5)',
      'none': 'none',
    },


    container: {
      center: true,
      padding: '1rem',
    },

    extend: {

      width: {
        '22': '5.5rem',
        '80': '20rem',
      },

      height: {
        'auto': 'auto',
        'px': '1px',
        '0': '0rem',
        '1': '0.25rem',
        '2': '0.5rem',
        '3': '0.75rem',
        '4': '1rem',
        '5': '1.25rem',
        '6': '1.5rem',
        '8': '2rem',
        '10': '2.5rem',
        '12': '3rem',
        '16': '4rem',
        '20': '5rem',
        '22': '5.5rem',
        '24': '6rem',
        '32': '8rem',
        '48': '12rem',
        '54': '14rem',
        '64': '16rem',
        '80': '20rem',
        '96': '24rem',
        '128': '32rem',
        '140': '40rem',
      },

      maxHeight: {
        'logo-small': '3rem',
        'logo': '6rem',
        'small-screen': '40vh',
        'half-screen': '70vh'
      },

      maxWidth: {
        'xs': '12rem',
        'sm': '16rem',
        'md': '33rem',
        'lg': '50rem',
        'xl': '60rem',
        '2xl': '70rem',
        '3xl': '80rem',
        '4xl': '90rem',
        '5xl': '120rem',
        'full': '100%',
      },

      fontSize: {
        'xs': '.75rem',     // 12px
        'sm': '.875rem',    // 14px
        'base': '1rem',     // 16px
        'lg': '1.125rem',   // 18px
        'xl': '1.25rem',    // 20px
        '2xl': '1.45rem',    // 24px
        '3xl': '1.9rem',  // 30px
        '4xl': '2.6rem',   // 36px
        '5xl': '3.7rem',      // 48px
      },

      lineHeight: {
        'none': 1,
        'tight': 1.25,
        'normal': 1.5,
        'large': 1.65,
        'loose': 2,
      },



    }

  },
  variants: {
    // Some useful comment
  },

  plugins: [
    require('tailwindcss-alpha')({
      modules: {
        backgroundColors: [],
        borderColors: [],
      },
      alpha: {
        '5': 0.05,
        '10': 0.10,
        '25': 0.25,
        '50': 0.5,
        '75': 0.75,
      },
    }),
  ],
}
