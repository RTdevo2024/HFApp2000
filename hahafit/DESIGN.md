# Hahafit — Design System

## Brand
- Name: Hahafit
- Logo: 💚 (green heart icon) + "Hahafit" text
- Tagline: پلتفرم ورزشی هوشمند

## Theme: Dark Mode
All pages use dark theme. No light mode variant.

## Color Palette

```css
:root {
  /* Backgrounds */
  --hf-bg-primary: #1a1a1a;
  --hf-bg-secondary: #2a2a2a;
  --hf-bg-tertiary: #333333;
  --hf-bg-hover: #3a3a3a;

  /* Accent */
  --hf-accent: #00FF66;
  --hf-accent-hover: #00CC52;
  --hf-accent-light: rgba(0,255,102,0.1);
  --hf-accent-glow: 0 0 20px rgba(0,255,102,0.3);

  /* Text */
  --hf-text-primary: #FFFFFF;
  --hf-text-secondary: #AAAAAA;
  --hf-text-disabled: #666666;

  /* Borders */
  --hf-border: #444444;
  --hf-border-light: #555555;

  /* Status */
  --hf-success: #00FF66;
  --hf-danger: #FF4444;
  --hf-warning: #FFAA00;
  --hf-info: #4488FF;

  /* Macros */
  --hf-protein: #4488FF;
  --hf-carbs: #FFAA00;
  --hf-fat: #FF4444;
}
```

## Typography
```css
--hf-font: 'Vazirmatn', sans-serif;
--hf-text-xs: 0.75rem;
--hf-text-sm: 0.875rem;
--hf-text-base: 1rem;
--hf-text-lg: 1.125rem;
--hf-text-xl: 1.25rem;
--hf-text-2xl: 1.5rem;
--hf-text-3xl: 2rem;
--hf-font-normal: 400;
--hf-font-medium: 500;
--hf-font-bold: 700;
```

## Spacing & Layout
```css
--hf-space-1: 4px;  --hf-space-2: 8px;
--hf-space-3: 12px; --hf-space-4: 16px;
--hf-space-5: 20px; --hf-space-6: 24px;
--hf-space-8: 32px;
--hf-radius-sm: 8px;
--hf-radius-md: 12px;
--hf-radius-lg: 16px;
--hf-radius-full: 9999px;
--hf-shadow-sm: 0 2px 8px rgba(0,0,0,0.2);
--hf-shadow-md: 0 4px 20px rgba(0,0,0,0.3);
--hf-shadow-lg: 0 8px 40px rgba(0,0,0,0.4);
--hf-max-width: 480px;
--hf-panel-max-width: 1200px;
--hf-sidebar-width: 260px;
```

## Component Styles

### Buttons
- Primary: bg=accent, text=dark, rounded-lg, hover=accent-hover
- Secondary: bg=bg-tertiary, text=white, border=border, hover=bg-hover
- Danger: bg=transparent, text=danger, border=danger
- All: height 48px, font-medium, transition 0.2s

### Inputs
- bg=bg-tertiary, text=white, border=border, rounded-md
- Focus: border=accent, box-shadow=accent-glow
- Height 48px, padding 0 16px

### Cards
- bg=bg-secondary, rounded-lg, shadow-sm
- Padding: space-5 or space-6
- Hover: translateY -2px

### Badges, Modals, Toggles
- Badges: px-3 py-1, text-sm, rounded-full
- Modals: overlay rgba(0,0,0,0.7) + blur(4px), bg-secondary, slide-up + fade-in
- Toggles/Radios/Checkboxes: custom styled, green accent active

## Animation Guidelines
- Duration: 0.2s micro, 0.3s transitions, 0.5s page changes
- Easing: ease-out enter, ease-in exit
- Types: fade, slide-up, scale, spin
- NO heavy animation libraries — pure CSS @keyframes

## Page Layouts

### Onboarding (Mobile-first)
- Max-width 480px centered
- Progress bar top, single-column form, fixed bottom buttons

### Dashboard / Panels
- Sidebar (260px) + main content
- Mobile: hamburger or bottom tabs
- Max-width 1200px

### RTL Rules
- direction: rtl on `<html>`
- text-align: right by default
- Flexbox row-reverse where needed
- Margins/paddings swap left↔right
- Icons mirror arrows

## UI Inventory
(Track all UI components built. Update after each prompt.)

| Component | File | Status | Used in |
|-----------|------|--------|---------|
| Progress Bar | onboarding.css | ⬜ | Onboarding |
| BMI Gauge | bmi-gauge.js | ⬜ | Summary |
| Exercise Card | coach-panel.css | ⬜ | Coach panel, User view |
| Meal Card | user-dashboard.css | ⬜ | Nutrition view |
| Notification Bell | notifications.css | ⬜ | All panels |
| Line Chart | charts.js | ⬜ | Progress |
| AI Animation | ai-animation.css | ⬜ | Post-payment |

## Responsive Breakpoints
- Mobile: < 640px (default)
- Tablet: 640–1024px
- Desktop: > 1024px

---

## Rules For This File

1. ALWAYS update DESIGN.md after creating any UI component:
   - Update "UI Inventory" table
   - Add any new CSS variables introduced
   - Document any new component patterns

2. Both CLAUDE.md and DESIGN.md are project memory.
   Read them FIRST before any change.
