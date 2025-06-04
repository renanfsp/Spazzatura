import { type ClassValue, clsx } from 'clsx';
import { twMerge } from 'tailwind-merge';

export function cn(...inputs: ClassValue[]) {
  return twMerge(clsx(inputs));
}

export function capitalize(str: string) {
  return `${str.charAt(0).toLocaleUpperCase()}${str.slice(1).toLocaleLowerCase()}`;
}
