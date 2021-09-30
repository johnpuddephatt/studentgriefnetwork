module.exports = {
  mode: 'jit',
  purge: {
    content: [
      './safelist.txt',
      './app/**/*.php',
      './resources/**/*.{php,vue,js}',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      center: true,

      padding: {
        DEFAULT: '1rem',
        sm: '1.5rem',
        lg: '2rem',
        xl: '2.5rem',
        '2xl': '3rem',
      },
    },
    fontFamily: {
      worksans: ['Work Sans', 'Helvetica', 'Arial', 'sans-serif'],
      kayaksans: ['Kayak Sans', 'Arial', 'sans-serif'],
    },
    colors: {
      white: '#FFFFFF',
      transparent: '#FFFFFF00',
      blue: {
        dark: '#20315B',
        DEFAULT: '#314277',
        light: '#597096',
        lighter: '#7F87F3',
        lightest: '#9BBCF2',
      },
      gray: {
        50: '#F9FAFB',
        100: '#F3F4F6',
        200: '#E5E7EB',
        300: '#D1D5DB',
        400: '#9CA3AF',
        500: '#6B7280',
        600: '#4B5563',
        700: '#374151',
        800: '#1F2937',
        900: '#111827',
      },
    },
    extend: {
      typography: (theme) => ({
        DEFAULT: {
          css: {
            h1: {
              fontSize: '4.5em',
              color: theme('colors.blue.DEFAULT'),
            },
            h2: {
              color: theme('colors.blue.dark'),
              fontSize: '2.5em',
              fontFamily: theme('fontFamily.kayaksans').join(','),
              fontWeight: 'bold',
            },
            h3: {
              color: theme('colors.blue.DEFAULT'),
              fontSize: '1.75em',
              fontFamily: theme('fontFamily.kayaksans').join(','),
              fontWeight: 'bold',
            },
            blockquote: {
              borderLeftStyle: 'none',
              paddingLeft: 0,
              fontStyle: 'normal',
              fontSize: '1.5em',
              color: theme('colors.blue.light'),
              fontFamily: theme('fontFamily.kayaksans').join(','),
              fontWeight: 'bold',
            },
          },
        },
      }),
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/typography'), require('@tailwindcss/forms')],
};
