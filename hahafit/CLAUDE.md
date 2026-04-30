# Hahafit — Technical Reference

## Project Overview
- Plugin Name: Hahafit - Smart Fitness Platform
- Type: WordPress Plugin
- Market: Iran (Persian, RTL)
- Tech Stack: PHP 7.4+ / WordPress 6.0+ / WooCommerce 7.0+ / Vanilla JS + CSS
- Text Domain: hahafit
- DB Prefix: hf_

## Architecture Decisions
- Frontend: Vanilla JS + CSS (NO React/Vue/jQuery) — lightweight & fast
- Animations: Pure CSS Animations + Vanilla JS (NO GSAP or heavy libs)
- Charts: Canvas API (NO Chart.js or external chart libs)
- Calendar: Custom Jalali converter (NO moment-jalaali or heavy libs)
- Font: Vazirmatn (self-hosted)
- Auth: WP native + custom OTP via Melipayamak API
- Payment: WooCommerce integration
- CPTs: hf_exercise, hf_food
- Custom Tables: 17 tables with hf_ prefix

## File Structure
(List every file created, organized by directory. Update after each prompt.)

```
hahafit/
└── CLAUDE.md          ← this file
```

## Database Schema
(List all 17 tables with their columns. Mark which ones are created.)

| Table | Status | Description |
|-------|--------|-------------|
| hf_otp_codes | ⬜ Not created | OTP verification codes |
| hf_user_profiles | ⬜ Not created | User body information |
| hf_form_options | ⬜ Not created | Dynamic form items |
| hf_workout_templates | ⬜ Not created | Workout templates |
| hf_workout_template_days | ⬜ Not created | Days inside workout templates |
| hf_workout_template_exercises | ⬜ Not created | Exercises inside template days |
| hf_nutrition_templates | ⬜ Not created | Nutrition templates |
| hf_nutrition_template_meals | ⬜ Not created | Meals inside nutrition templates |
| hf_nutrition_template_foods | ⬜ Not created | Foods inside meals |
| hf_user_programs | ⬜ Not created | User assigned programs |
| hf_user_program_customizations | ⬜ Not created | Coach customizations |
| hf_progress_logs | ⬜ Not created | User progress logs |
| hf_workout_logs | ⬜ Not created | Exercise completion logs |
| hf_subscriptions | ⬜ Not created | User subscriptions |
| hf_tickets | ⬜ Not created | Support tickets |
| hf_ticket_replies | ⬜ Not created | Ticket replies |
| hf_notifications | ⬜ Not created | User notifications |

## REST API Endpoints
(Add endpoints as they are implemented. Mark status with ⬜ / ✅.)

| Method | Endpoint | Status | Description |
|--------|----------|--------|-------------|
| - | - | - | - |

## Custom Post Types
| CPT | Status | Description |
|-----|--------|-------------|
| hf_exercise | ⬜ Not created | Exercise library |
| hf_food | ⬜ Not created | Food library |

## User Roles & Capabilities
| Role | Status | Capabilities |
|------|--------|-------------|
| coach | ⬜ Not created | manage_hf_templates, manage_hf_programs, ... |

## WooCommerce Integration
- Subscription product: (TBD by admin)
- Payment flow: Onboarding → WC Checkout → AI Animation → Dashboard
- Hooks used: (list as added)

## Dependencies
- PHP: (none beyond WordPress)
- JS: (none — Vanilla JS only)
- CSS: (none — custom CSS only)
- External APIs: Melipayamak (OTP SMS)
- Fonts: Vazirmatn (self-hosted)

## Development Progress

### ✅ Completed Prompts
- Prompt 0a — Created CLAUDE.md

### 🔄 Current Prompt
Prompt 0b — Creating DESIGN.md

### ⬜ Remaining Prompts
- Prompt 0b: Create DESIGN.md
- Prompt 1a/1b/1c: Plugin skeleton & database
- Prompt 2a/2b/2c: REST API & authentication
- Prompt 3a/3b/3c: Onboarding flow
- Prompt 4a/4b: AI animation & post-payment
- Prompt 5a/5b: Exercise library
- Prompt 6: Food library
- Prompt 7a/7b/7c: Workout templates
- Prompt 8a/8b: Nutrition templates
- Prompt 9: Program matcher
- Prompt 10: Coach customization
- Prompt 11a/11b/11c: User dashboard & program views
- Prompt 12a/12b: Progress tracking
- Prompt 13a/13b: Subscription & WooCommerce
- Prompt 14a/14b: Ticket system
- Prompt 15: Notifications
- Prompt 16a/16b: Coach panel shell
- Prompt 17a/17b/17c: Admin panel
- Prompt 18a/18b: i18n / RTL / Jalali

## Known Issues & Bugs
| # | Description | Status | Found in | Fixed in |
|---|-------------|--------|----------|----------|
| - | - | - | - | - |

## Change Log
| Date | Prompt | Change Description |
|------|--------|--------------------|
| 2026-04-30 | 0a | Created CLAUDE.md |

---

## Rules For This File

1. ALWAYS update CLAUDE.md after completing any prompt:
   - Update "Development Progress" section
   - Update "File Structure" with new files
   - Update table statuses (⬜ → ✅)
   - Add entry to "Change Log"

2. If any bug is found, add it to "Known Issues"

3. This file is the project memory — treat it as sacred.
   Every developer (human or AI) should read it FIRST before making changes.
