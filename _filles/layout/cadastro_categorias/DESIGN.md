---
name: Ponto Direto Industrial Core
colors:
  surface: '#f8f9ff'
  surface-dim: '#cbdbf5'
  surface-bright: '#f8f9ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#eff4ff'
  surface-container: '#e5eeff'
  surface-container-high: '#dce9ff'
  surface-container-highest: '#d3e4fe'
  on-surface: '#0b1c30'
  on-surface-variant: '#44474d'
  inverse-surface: '#213145'
  inverse-on-surface: '#eaf1ff'
  outline: '#75777e'
  outline-variant: '#c5c6ce'
  surface-tint: '#4e5f7e'
  primary: '#031632'
  on-primary: '#ffffff'
  primary-container: '#1a2b48'
  on-primary-container: '#8293b5'
  inverse-primary: '#b6c7eb'
  secondary: '#904d00'
  on-secondary: '#ffffff'
  secondary-container: '#fd8b00'
  on-secondary-container: '#603100'
  tertiary: '#11171d'
  on-tertiary: '#ffffff'
  tertiary-container: '#262c32'
  on-tertiary-container: '#8d939a'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d7e2ff'
  primary-fixed-dim: '#b6c7eb'
  on-primary-fixed: '#081b38'
  on-primary-fixed-variant: '#374765'
  secondary-fixed: '#ffdcc3'
  secondary-fixed-dim: '#ffb77d'
  on-secondary-fixed: '#2f1500'
  on-secondary-fixed-variant: '#6e3900'
  tertiary-fixed: '#dde3eb'
  tertiary-fixed-dim: '#c1c7cf'
  on-tertiary-fixed: '#161c22'
  on-tertiary-fixed-variant: '#41474e'
  background: '#f8f9ff'
  on-background: '#0b1c30'
  surface-variant: '#d3e4fe'
typography:
  display-price:
    fontFamily: Inter
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Inter
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
  headline-md:
    fontFamily: Inter
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-bold:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '700'
    lineHeight: 20px
  numeral-xl:
    fontFamily: Inter
    fontSize: 36px
    fontWeight: '500'
    lineHeight: 44px
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  base: 8px
  touch-margin: 16px
  gutter: 20px
  container-padding: 24px
  target-min: 48px
---

## Brand & Style

The design system is engineered for the high-velocity environment of retail and hospitality. It balances the "Stability" of Navy Blue with the "Energy" of Vibrant Orange to create a UI that feels both authoritative and responsive. 

The aesthetic follows a **Modern Industrial** direction. This approach prioritizes utility and structural integrity, utilizing high-contrast interfaces optimized for varying lighting conditions and touchscreen interactions. The emotional response is one of reliability and speed—minimizing cognitive load for operators while providing clear visual cues for critical business actions.

## Colors

The palette is anchored by **Navy Blue (#1A2B48)**, used for primary navigation, headers, and structural elements to evoke a sense of professional stability. **Vibrant Orange (#FF8C00)** is reserved strictly for primary actions, notifications, and "energy" points, ensuring that the most important buttons are instantly discoverable on a crowded POS screen.

A light-mode base with high-contrast neutrals is used to ensure legibility under bright overhead store lighting. Semantic colors for success and error are highly saturated to remain visible at a glance.

## Typography

This design system utilizes **Inter** for its exceptional readability and tabular numeric properties, which are critical for processing transactions. 

The type hierarchy emphasizes large, bold numerals for pricing and quantities. "Display-price" and "Numeral-xl" tiers are designed for high-visibility confirmation of totals. Labels use a bold, uppercase treatment to differentiate metadata from actionable content. Line heights are slightly increased to provide a generous "tap target" feel for text-based list items.

## Layout & Spacing

The layout utilizes a **fixed grid** approach optimized for 10-inch to 15-inch touchscreen displays. A 12-column structure is used for administrative views, while the checkout interface is split into a 2/3 (Product Grid) and 1/3 (Transaction List) layout.

A strict **8px spacing rhythm** governs the UI. All interactive elements must adhere to a minimum size of 48px to accommodate finger taps. White space is used strategically not for "minimalism," but to prevent accidental inputs in high-pressure environments.

## Elevation & Depth

Visual hierarchy is established through **Tonal Layers** and **Low-Contrast Outlines**. 

The background uses a soft grey (#F8FAFC) to reduce glare. Primary containers (like the shopping cart or product categories) sit on white surfaces with a subtle 1px border (#E2E8F0). Depth is achieved not through heavy shadows, but through "inset" states for pressed buttons and "raised" 2px shadows for active modals. This maintains the "Modern Industrial" feel—sturdy and flat rather than ethereal.

## Shapes

The design system employs **Soft** roundedness (4px to 8px). This "Industrial" radius provides a professional, geometric look while removing the harshness of sharp corners. 

- **Standard components:** 4px radius.
- **Large containers/Cards:** 8px radius.
- **Inputs:** 4px radius to maintain a structural, form-fitted appearance.

## Components

### Buttons
- **Primary:** Solid Vibrant Orange with white text. High-visibility for the "Complete Sale" or "Pay" actions.
- **Secondary:** Solid Navy Blue with white text. Used for administrative functions (Edit, Refund).
- **Ghost:** Navy Blue outline with transparent background. Used for secondary navigation.

### Input Fields
Inputs feature a 2px border. When focused, the border transitions to Navy Blue with a subtle inset glow to indicate "Active Type" status. Labels are always persistent above the field for clarity.

### The Transaction List
Items in the cart are displayed as high-contrast rows with a minimum height of 64px. Clear "X" delete buttons are placed on the far right, utilizing the Vibrant Orange color only on hover/tap to avoid visual clutter.

### Keypads & Numpads
Numerical inputs use large, block-style buttons with heavy Inter Bold typography. The "Enter" or "Confirm" key on the keypad is always Vibrant Orange.

### Status Chips
Utilize "Industrial" colors: Solid backgrounds with high-contrast text (e.g., "Paid" in green, "Pending" in orange) to indicate order status at a glance in a busy kitchen or retail floor.